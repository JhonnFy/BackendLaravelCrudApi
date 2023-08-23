<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            
            $table->timestamps();
        });

        Schema::create('customers',function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('addres_email');
            $table->integer('phone_number');
            
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table){
            $table->increments('id');
            $table->date('date_order');
            $table->date('pay_day');
            $table->float('discount');
            $table->string('sent');

            #SelectColumm
            $table->unsignedInteger('customer_id');
            #ReferencesFK
            $table->foreign('customer_id')->references('id')->on('customers');
                        
            $table->timestamps();
        });


        Schema::create('products', function (Blueprint $table){
            $table->increments('id');
            $table->string('section');
            $table->string('name');
            $table->float('price');
            $table->date('date');
            $table->string('imported_country');

            $table->timestamps();

        });

        Schema::create('orders_products', function (Blueprint $table){
            #Reserve
             $table->unsignedInteger('order_id');
             $table->foreign('order_id')->references('id')->on('orders');
            #Reserve
             $table->unsignedInteger('product_id');
             $table->foreign('product_id')->references('id')->on('products');

            #NewAtribute
             $table->float('units');
            
             $table->timestamps();
        });


     

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('ordered_products');
    }
};

