<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // course
        Schema::create("courses", function (Blueprint $table) {
            $table->id();
            $table->string("cu_code");
            $table->string("name");
            $table->decimal("credits");
            $table->timestamps();
            $table->timestamp('passed_at')->nullable();

        });

        Schema::create("tests", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("course_id");
            $table->string("name");
            $table->float("weighting_factor");
            $table->decimal("lowest_passing_grade")->default(5.5);
            $table->decimal("best_grade")->nullable();
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses');
        });
        DB::statement("ALTER TABLE tests ADD CONSTRAINT check_weight_range CHECK (weighting_factor >= 0 AND weighting_factor <= 1)");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("tests");
        Schema::dropIfExists("courses");
    }
};
