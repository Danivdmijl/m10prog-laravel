<label class="block">
    <span class="text-gray-700">Titel</span>
    <input type="text" name="titel" class="mt-1 block w-full" placeholder="" value="{{ old('titel', $project->titel) }}">
</label>
<label class="block">
    <span class="text-gray-700">Description</span>
    <textarea name="description" class="mt-1 block w-full" rows="3">{{ old('description', $project->description) }}</textarea>
</label>
