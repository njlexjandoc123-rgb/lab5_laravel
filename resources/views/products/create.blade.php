<x-app-layout>
    <div class="p-6 max-w-4xl mx-auto space-y-6">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Add New Subject / Course</h1>
            <a href="{{ route('products.index') }}" class="text-sm text-gray-600 hover:underline">&larr; Back to Subjects List</a>
        </div>

        <div class="bg-white p-6 rounded-md shadow-sm border border-gray-200">
            <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Subject Code (SKU)</label>
                        <input type="text" name="sku" placeholder="e.g. WEB101" value="{{ old('sku') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Subject Name / Title</label>
                        <input type="text" name="name" placeholder="e.g. Web Systems and Technologies" value="{{ old('name') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Department / Category</label>
                        <input type="text" name="category" placeholder="e.g. Information Technology" value="{{ old('category') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Instructor / Professor</label>
                        <input type="text" name="supplier" placeholder="e.g. Prof. Santos" value="{{ old('supplier') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm">
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Units (Quantity)</label>
                        <input type="number" name="quantity" value="{{ old('quantity', 3) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Minimum Unit Threshold</label>
                        <input type="number" name="reorder_level" value="{{ old('reorder_level', 1) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Subject Tuition Fee (₱)</label>
                        <input type="number" step="0.01" name="unit_price" value="{{ old('unit_price', 1500.00) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700">Subject Syllabus / Description</label>
                    <textarea name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm">{{ old('description') }}</textarea>
                </div>

                <div class="flex justify-end space-x-2 pt-4 border-t">
                    <a href="{{ route('products.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded text-sm">Cancel</a>
                    <button type="submit" class="bg-slate-800 hover:bg-slate-900 text-white font-semibold py-2 px-4 rounded text-sm shadow">Save Subject</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>