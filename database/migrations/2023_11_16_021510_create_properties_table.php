<?php

use App\Enums\StatusEnum;
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
        Schema::create('properties', function (Blueprint $table) {
            $table->ulid('id');
            $table->string('type');
            $table->foreign('type')
                ->references('slug')
                ->on('types')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('location');
            $table->foreign('location')
                ->references('slug')
                ->on('locations')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignUlid('agent_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('property_id');
            $table->string('slug');
            $table->string('name');
            $table->enum('status', array_column(StatusEnum::cases(), 'value'));
            $table->float('price');
            $table->integer('room')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('garage')->nullable();
            $table->date('built_year')->nullable();
            $table->string('area');
            $table->longText('description');
            $table->boolean('is_available');
            $table->timestamps();
            $table->index(['id', 'type', 'location']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
