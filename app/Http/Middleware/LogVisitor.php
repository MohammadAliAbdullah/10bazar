<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;
use GeoIP;
use Jenssegers\Agent\Agent;

class LogVisitor
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $today = Carbon::today();

        $alreadyLogged = Visitor::where('ip', $ip)
            ->whereDate('created_at', $today)
            ->exists();

        if (!$alreadyLogged) {
            // Get location
            // $location = geoip($ip);
            if ($ip === '127.0.0.1' || $ip === '::1') {
                $location = (object)[
                    'country' => 'Localhost',
                    'city' => 'Localhost',
                ];
            } else {
                try {
                    $location = geoip($ip);
                } catch (\Exception $e) {
                    // Fallback if geoip fails
                    $location = (object)[
                        'country' => 'Unknown',
                        'city' => 'Unknown',
                    ];
                }
            }
            // dd($location);
            // Detect device/browser/platform
            $agent = new Agent();
            $agent->setUserAgent($request->header('User-Agent'));

            Visitor::create([
                'ip' => $ip,
                'country' => $location->country ?? 'Unknown',
                'city' => $location->city ?? 'Unknown',
                'browser' => $agent->browser() ?? 'Unknown',
                'platform' => $agent->platform() ?? php_uname('s'),
                'device' => $agent->device() ?? 'Web',
                'referer' => $request->headers->get('referer'),
            ]);
        }

        return $next($request);
    }
}
