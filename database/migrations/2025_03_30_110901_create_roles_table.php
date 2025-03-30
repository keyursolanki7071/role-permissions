<?php

use App\Models\Role;
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
        $tableName = (new Role())->getTable();
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum("is_super_admin", ["yes", "no"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tableName = (new Role())->getTable();
        Schema::dropIfExists($tableName);
    }
};
