<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // create id with primary key with auto increment
            $table->string("product_name" , 50); // create name with varchar
            $table->integer("quantity");
            $table->decimal("price",10,2);
            $table->string("image")->nullable();
            $table->text("desciption")->nullable();
            $table->timestamps(); // timestamps create 2 field. Field1 is create_at and field2 is update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
