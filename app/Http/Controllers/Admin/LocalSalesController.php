<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalSalesController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.local_sales.index', compact('products'));
    }

    public function destroy($id)
    {
        $product = Order::findOrFail($id);
        $product->delete();
        Session::flash('status', 'Product moved to trash successfully.');
        return redirect()->route('madmin.orders.pending');
    }

    public function trash()
    {
        $orders = Order::onlyTrashed()->paginate(20);
        return view('Admin.Orders.trash', compact('orders'));
    }

    public function restore($id)
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        $order->restore();

        Session::flash('status', 'Order restored successfully.');
        return redirect()->route('madmin.local-sale.trash');
    }
    public function forceDelete($id)
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        $order->forceDelete();

        Session::flash('status', 'Order permanently deleted.');
        return redirect()->route('madmin.local-sale.trash');
        
    }




}
