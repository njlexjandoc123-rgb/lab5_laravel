<x-app-layout>
    <div class="p-6 space-y-6">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Subject / Course Management</h1>
            <a href="{{ route('products.create') }}" class="bg-slate-700 hover:bg-slate-800 text-white font-bold py-2 px-4 rounded shadow text-sm">
                + Add Subject
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-md shadow-sm border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold">
                        <tr>
                            <th class="px-6 py-3">Code</th>
                            <th class="px-6 py-3">Subject Title</th>
                            <th class="px-6 py-3">Category</th>
                            <th class="px-6 py-3">Instructor</th>
                            <th class="px-6 py-3 text-center">Units</th>
                            <th class="px-6 py-3 text-right">Tuition Fee</th>
                            <th class="px-6 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($products as $product)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-bold text-slate-800">{{ $product->sku }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $product->name }}</td>
                                <td class="px-6 py-4">{{ $product->category }}</td>
                                <td class="px-6 py-4">{{ $product->supplier ?? 'TBA' }}</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-2.5 py-1 text-xs font-bold rounded-full bg-slate-100 text-slate-800 border">
                                        {{ $product->quantity }} Units
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right font-semibold text-slate-800">₱{{ number_format($product->unit_price, 2) }}</td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <a href="{{ route('products.edit', $product) }}" class="text-blue-600 hover:text-blue-900 font-semibold">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this subject?')">
                                     @csrf
                                     @method('DELETE')
                                       <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Delete</button>
                                   </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>