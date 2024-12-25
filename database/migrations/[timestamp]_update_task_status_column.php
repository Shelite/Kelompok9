use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Hapus kolom status lama jika masih ada
            if (Schema::hasColumn('tasks', 'status')) {
                $table->dropColumn('status');
            }
            
            // Pastikan kolom task_status ada
            if (!Schema::hasColumn('tasks', 'task_status')) {
                $table->string('task_status')->default('pending');
            }
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('status')->nullable();
        });
    }
}; 