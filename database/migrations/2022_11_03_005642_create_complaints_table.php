<?php

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\Jetstream\Rules\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('text_complaint');
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->default(0);
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Roles::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
};
