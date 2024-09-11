<div class="border p-4 rounded">
    <h3 class="text-xl mb-2">{{ \Illuminate\Support\Facades\App::isLocale('ro') ? $subcategory->name_ro : $subcategory->name }}</h3>
    <p>{{ $subcategory->description ?  __('categories.' . $subcategory->description) : '' }}</p>
    // Add other details if necessary
</div>
