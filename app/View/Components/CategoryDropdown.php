<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{
    protected ?string $currentCategory;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $currentCategory)
    {
        $this->currentCategory = $currentCategory;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $filters = request()->only('search', 'category');

        return view('components.category-dropdown', [
            'categories' => Category::all(),
            'currentCategory' => $this->currentCategory ? Category::firstWhere('slug', $this->currentCategory) : null
        ]);
    }
}
