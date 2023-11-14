<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ContactController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/',[WelcomeController::class,'index'])->name('home');
Route::get('/Services',[WelcomeController::class,'Services'])->name('services');
Route::get('/Services/{id}',[WelcomeController::class,'Services_detail'])->name('service_details');
Route::get('/Projects',[WelcomeController::class,'projects'])->name('projects');
Route::get('/Projects/{id}',[WelcomeController::class,'Projects_detail'])->name('project_details');
Route::get('/Shop',[WelcomeController::class,'viewShop_product'])->name('shops');
Route::get('/Shop/{id}',[WelcomeController::class,'viewShop_product_detail'])->name('product_detail');
Route::get('/Contacts',[WelcomeController::class,'Contact_page'])->name('contacts');
Route::post('/Contact-message',[ContactController::class,'sendEmail'])->name('sendEmail');
//Route::post('/admin/AddStaff',[AuthController::class,'register'])->name('addStaff');
Route::get('about',[AboutController::class,'index'])->name('about');
Route::post('/Testimonial',[TestimonialController::class,'addTestimonial'])->name('add_testimonial');


Route::post('/Login',[AuthController::class,'login'])->name('StaffLogin');

Route::get('/Login',[AuthController::class,'index'])->name('userLogin');

Route::group(['middleware' => 'auth'], function()
{

        Route::get('/Testimonial',[TestimonialController::class,'clientTestimonial']);
        Route::get('/admin/Addpartners',[PartnersController::class,'addPartners'])->name('admin_partners');
        Route::post('/admin/Addpartners',[PartnersController::class,'savePartners']);
        Route::get('/admin/Partners',[PartnersController::class,'OurPartners'])->name('admin_all_partners');
        Route::post('/admin/Publish_partners/{id}',[PartnersController::class,'publish_partners'])->name('admin_plublish_partners');
        Route::post('/admin/Del_partners/{id}',[PartnersController::class,'delete_partners'])->name('admin_delete_partners');
        Route::get('/admin/Edit_partners/{id}',[PartnersController::class,'Edit_partners'])->name('admin_edit_partners');
        Route::post('/admin/Edit_partners/{id}',[PartnersController::class,'Save_edit_partners'])->name('save_edit_partners');



        Route::get('/service',[ServiceController::class,'index']);
        Route::get('/admin/AddService',[ServiceController::class,'AddService'])->name('admin_services');
        Route::Post('/admin/AddService',[ServiceController::class,'SaveService']);
        Route::get('/admin/ViewService',[ServiceController::class,'ViewService'])->name('admin_all_services');
        Route::get('/admin/ViewService/{id}',[ServiceController::class,'ViewService_details']);
        Route::post('/admin/Service_Add_Project/{id}',[ServiceController::class,'Add_Project_To_Service']);
        Route::post('/admin/Publish_service/{id}',[ServiceController::class,'publish_service'])->name('admin_plublish_service');
        Route::post('/admin/Del_service/{id}',[ServiceController::class,'delete_service'])->name('admin_delete_service');
        Route::post('/admin/Service_Del_Project/{id}',[ServiceController::class,'Delete_Project_To_Service'])->name('remove_service_project_details');
        Route::get('/admin/Edit_service/{id}',[ServiceController::class,'Edit_service'])->name('admin_edit_service');
        Route::post('/admin/Edit_service/{id}',[ServiceController::class,'Save_edit_service'])->name('admin_save_edit_service');



        Route::get('/admin/AddProject',[ProjectController::class,'AddProject'])->name('admin_projects');
        Route::Post('/admin/AddProject',[ProjectController::class,'SaveProject']);
        Route::get('/admin/ViewProject',[ProjectController::class,'ViewProject'])->name('admin_all_projects');
        Route::get('/admin/ViewProject/{id}',[ProjectController::class,'ViewProject_details'])->name('admin_project_details');
        Route::get('/admin/Edit_project/{id}',[ProjectController::class,'Edit_project'])->name('admin_edit_project');
        Route::post('/admin/Edit_project/{id}',[ProjectController::class,'Save_Edit_project'])->name('admin_save_edit_project');
        Route::post('/admin/Publish_project/{id}',[ProjectController::class,'publish_project'])->name('admin_plublish_project');
        Route::post('/admin/Del_project/{id}',[ProjectController::class,'delete_project'])->name('admin_delete_project');
        Route::post('/admin/Del_project_Pic/{id}',[ProjectController::class,'delete_project_pictures'])->name('project_remove_pic');
        Route::post('/admin/Add_project_Pic/{id}',[ProjectController::class,'add_project_pictures'])->name('project_add_more_pic');



        Route::get('/admin/AddProduct',[ShopController::class,'AddShop_product'])->name('admin_shops');
        Route::post('/admin/AddProduct',[ShopController::class,'SaveShop_product']);
        Route::get('/admin/more_product_photos/{id}',[ShopController::class,'Add_more_product_photos']);
        Route::post('/admin/more_product_photos',[ShopController::class,'Save_more_product_photos']);
        Route::get('/admin/Shop',[ShopController::class,'viewShop_product'])->name('admin_all_shop');
        Route::post('/admin/Publish_product/{id}',[ShopController::class,'publish_product'])->name('admin_plublish_product');
        Route::post('/admin/Del_product/{id}',[ShopController::class,'delete_product'])->name('admin_delete_product');
        Route::post('/admin/Del_product_images/{id}',[ShopController::class,'Delete_Product_images'])->name('admin_delete_product_images');
        Route::get('/admin/Edit_product/{id}',[ShopController::class,'Edit_product'])->name('admin_edit_product');
        Route::post('/admin/Edit_product/{id}',[ShopController::class,'Save_edit_product'])->name('admin_save_edit_product');

        Route::post('/admin/AddStaff',[AuthController::class,'register'])->name('addStaff');
        Route::get('/admin/AddStaff',[AuthController::class,'addStaff'])->name('admin_staff');
        Route::get('/admin/AllStaff',[AuthController::class,'ViewStaff'])->name('admin_all_staff');
        Route::post('/admin/Publish_staff/{id}',[AuthController::class,'publish_staff'])->name('admin_plublish_staff');
        Route::post('/admin/Del_staff/{id}',[AuthController::class,'delete_staff'])->name('admin_delete_staff');
        Route::get('/admin/Edit_staff/{id}',[AuthController::class,'edit_staff'])->name('edit_staff');
        Route::post('/admin/Edit_staff/{id}',[AuthController::class,'post_edit_staff'])->name('post_edit_staff');




        Route::get('/admin/Testimonial',[TestimonialController::class,'AdminTestimonial'])->name('admin_testimonials');
        Route::post('/admin/Publish_Testimonial/{id}',[TestimonialController::class,'publish_testimonial'])->name('admin_testimonials_publish');
        Route::post('/admin/Del_Testimonial/{id}',[TestimonialController::class,'delete_testimonial'])->name('admin_testimonials_delete');


});



if (User::where("role","=", "admin")->exists())
{
    Auth::routes([
        'register' => false,
        
    ]);

}
else
{
 
    Auth::routes();
 
}
//Route::get('/login',[AuthController::class,'index'])->name('userLogin');

