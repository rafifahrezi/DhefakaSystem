<?php

use App\Http\Controllers\OrderExportController;
use Illuminate\Support\Facades\Route;
use App\Livewire\{
    Auth\ForgetPasswordPage,
    Auth\LoginPage,
    Auth\RegisterPage,
    Auth\ResetPasswordPage,
    CancelPage,
    CartPage,
    CategoriesPage,
    CheckoutPage,
    HomePage,
    MyOrderDetailPage,
    MyOrdersPage,
    PaymentQrPage,
    ProductDetailPage,
    ProductsPage,
    AboutUs,
    SuccessPage
};

use App\Livewire\Frontend\Pages\Contact;

// -------------------------
// GUEST ROUTES
// -------------------------
Route::middleware('guest')->group(function () {
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class);
    Route::get('/forget', ForgetPasswordPage::class)->name('password.request');
    Route::get('/reset/{token}', ResetPasswordPage::class)->name('password.reset');
});

// -------------------------
// PUBLIC ROUTES
// -------------------------
Route::get('/', HomePage::class);
Route::get('/categories', CategoriesPage::class);
Route::get('/contact', Contact::class);
Route::get('/tentang-kami', AboutUs::class)->name('tentang-kami');
Route::get('/products', ProductsPage::class)->name('products');
Route::get('/products/{slug}', ProductDetailPage::class);
Route::get('/cart', CartPage::class);

// -------------------------
// USER-AUTHENTICATED ROUTES
// -------------------------
Route::middleware(['auth:web'])->group(function () {
    Route::get('/my-profile', \App\Livewire\MyProfile::class)->name('my-profile');
    Route::get('/checkout', CheckoutPage::class);
    Route::get('/my-orders', MyOrdersPage::class);
    Route::get('/my-orders/{order_id}', MyOrderDetailPage::class)->name('my-orders.show');
    Route::get('/payment/qr', PaymentQrPage::class)->name('payment.qr');
    Route::get('/success', SuccessPage::class)->name('success');
    Route::get('/cancel', CancelPage::class)->name('cancel');
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    });
   
});

// -------------------------
// ADMIN ROUTES
// Route::middleware(['auth', 'is_admin'])->group(function () {
//     Route::get('/admin/dashboard', AdminDashboard::class);
// });
Route::get('/orders/export', [OrderExportController::class, 'exportCsv'])
    ->name('orders.export');