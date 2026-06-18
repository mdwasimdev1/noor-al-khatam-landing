<?php

namespace Tests\Feature;

use App\Models\Benefit;
use App\Models\GalleryItem;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class AdminContentCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_create_update_and_delete_a_benefit(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)
            ->post(route('admin.benefits.store'), [
                'text' => 'Original benefit',
                'color' => 'bg-emerald-500',
                'sort_order' => 2,
            ])
            ->assertRedirect(route('admin.benefits.index'));

        $benefit = Benefit::firstOrFail();
        $this->assertSame('shadow-emerald-500/40', $benefit->shadow);

        $this->actingAs($admin)
            ->put(route('admin.benefits.update', $benefit), [
                'text' => 'Updated benefit',
                'color' => 'bg-amber-400',
                'sort_order' => 1,
            ])
            ->assertRedirect(route('admin.benefits.index'));

        $this->assertDatabaseHas('benefits', [
            'id' => $benefit->id,
            'text' => 'Updated benefit',
            'shadow' => 'shadow-amber-400/40',
        ]);

        $this->actingAs($admin)
            ->delete(route('admin.benefits.destroy', $benefit))
            ->assertRedirect(route('admin.benefits.index'));

        $this->assertDatabaseMissing('benefits', ['id' => $benefit->id]);
    }

    public function test_admin_can_manage_gallery_and_landing_page_uses_database_content(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);
        Benefit::create([
            'text' => 'Database benefit',
            'color' => 'bg-sky-400',
            'shadow' => 'shadow-sky-400/40',
            'sort_order' => 1,
        ]);

        $this->actingAs($admin)
            ->post(route('admin.gallery.store'), [
                'title' => 'Database gallery title',
                'subtitle' => 'Gallery subtitle',
                'badge' => 'Featured',
                'badge_color' => 'amber',
                'price' => '$100',
                'sort_order' => 1,
                'image' => UploadedFile::fake()->image('gallery.jpg'),
            ])
            ->assertRedirect(route('admin.gallery.index'));

        $gallery = GalleryItem::firstOrFail();
        $this->assertFileExists(public_path('images/'.$gallery->image));

        $this->get(route('landing'))
            ->assertOk()
            ->assertSee('Database benefit')
            ->assertSee('Database gallery title');

        $this->actingAs($admin)
            ->put(route('admin.gallery.update', $gallery), [
                'title' => 'Updated gallery title',
                'subtitle' => 'Updated subtitle',
                'badge' => 'Updated',
                'badge_color' => 'sky',
                'price' => '$120',
                'sort_order' => 3,
            ])
            ->assertRedirect(route('admin.gallery.index'));

        $this->assertDatabaseHas('gallery_items', [
            'id' => $gallery->id,
            'title' => 'Updated gallery title',
        ]);

        $imagePath = public_path('images/'.$gallery->image);

        $this->actingAs($admin)
            ->delete(route('admin.gallery.destroy', $gallery))
            ->assertRedirect(route('admin.gallery.index'));

        $this->assertDatabaseMissing('gallery_items', ['id' => $gallery->id]);
        $this->assertFileDoesNotExist($imagePath);
    }
}
