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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug")->unique();
            $table->binary("image")->nullable();
            $table->text("description")->nullable();
            $table->timestamps();
        });

        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug")->unique();
            $table->text("designation");
            $table->binary("image")->nullable();
            $table->text("description")->nullable();
            $table->unsignedBigInteger('department_id'); // Add this line to create department_id column
            $table->timestamps();
        });

        // Doctor Migration
        Schema::table('doctors', function (Blueprint $table) {
            $table->foreign('department_id')->references('id')->on('departments');
        });

        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->double("price");
            $table->timestamps();
        });

        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->binary("image")->nullable();
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->text("designation");
            $table->binary("image")->nullable();
            $table->timestamps();
        });

        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->binary("logo")->nullable();
            $table->string("name");
            $table->text("address");
            $table->string("email1")->nullable();
            $table->string("email2")->nullable();
            $table->string('phone_number1')->nullable();
            $table->string('phone_number2')->nullable();
            $table->binary("image")->nullable();
            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
        Schema::dropIfExists('doctors');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('sliders');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('site_settings');
    }
};
