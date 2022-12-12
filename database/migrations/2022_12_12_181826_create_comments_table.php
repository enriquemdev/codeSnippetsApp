<?php

use App\Models\Comment;
use App\Models\Snippet;
use App\Models\User;
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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->cascadeOnDelete();
            $table->foreignIdFor(Snippet::class)->cascadeOnDelete();
            $table->foreign('response_of')->references('id')->on('comments')->nullable()->cascadeOnDelete();//Pueden ser respuesta a otro comentario de manera recursiva
            $table->text('comment_text');
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
        Schema::dropIfExists('comments');
    }
};
