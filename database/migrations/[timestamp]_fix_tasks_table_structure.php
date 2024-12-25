use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Drop kolom status jika ada
            if (Schema::hasColumn('tasks', 'status')) {
                $table->dropColumn('status');
            }
            
            // Drop kolom task_status jika ada
            if (Schema::hasColumn('tasks', 'task_status')) {
                $table->dropColumn('task_status');
            }
            
            // Buat kolom status baru dengan enum
            $table->enum('status', ['pending', 'completed'])->default('pending');
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}; 