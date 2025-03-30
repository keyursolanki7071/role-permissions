<?php

use App\Models\Permissions;
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
        $tableName = (new Permissions())->getTable();
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("key")->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tableName = (new Permissions())->getTable();
        Schema::dropIfExists($tableName);
    }
};
