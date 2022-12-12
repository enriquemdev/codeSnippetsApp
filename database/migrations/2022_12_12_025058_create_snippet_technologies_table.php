<?php

use App\Models\Snippet;
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
        Schema::create('snippet_technologies', function(Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Snippet::class)->cascadeOnDelete();
            $table->foreignIdFor(Technologies::class)->cascadeOnDelete();
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
        Schema::dropIfExists('snippet_technologies');
    }
};
