<?php

use App\Models\Technologies;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('not_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Technologies::class)->cascadeOnDelete();
            $table->foreignIdFor(Technologies::class)->name('language_id')->cascadeOnDelete();
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
        Schema::dropIfExists('not_languages');
    }
};
