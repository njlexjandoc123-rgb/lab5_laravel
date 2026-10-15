<x-app-layout>
    <div class="p-6 space-y-6">
        <!-- Greeting Header -->
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Good Day, {{ Auth::user()->name }}!</h1>
            <a href="{{ route('products.create') }}" class="bg-slate-700 hover:bg-slate-800 text-white text-sm font-medium px-4 py-2 rounded shadow">
                + Add New Subject
            </a>
        </div>

        <!-- Real-Time Top Alert -->
        <div class="bg-cyan-100 border border-cyan-200 text-cyan-800 px-4 py-3 rounded-md flex justify-between items-center text-sm">
            <span><strong>System Update:</strong> Subject catalog and tuition fees have been updated for this semester.</span>
            <button onclick="this.parentElement.remove()" class="text-cyan-800 font-bold ml-4">&times;</button>
        </div>

        <!-- Metric Cards Row -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white p-5 rounded-md shadow-sm border border-gray-200 text-center">
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Enrolled Subjects</div>
                <div class="text-3xl font-extrabold text-slate-800 mt-2">{{ $totalProducts }}</div>
            </div>
            <div class="bg-white p-5 rounded-md shadow-sm border border-gray-200 text-center">
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Low Unit Subjects</div>
                <div class="text-3xl font-extrabold text-cyan-600 mt-2">{{ $lowStockItems }}</div>
            </div>
            <div class="bg-white p-5 rounded-md shadow-sm border border-gray-200 text-center">
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Inactive / Closed</div>
                <div class="text-3xl font-extrabold text-cyan-600 mt-2">{{ $outOfStockItems }}</div>
            </div>
            <div class="bg-white p-5 rounded-md shadow-sm border border-gray-200 text-center">
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Total Tuition Value</div>
                <div class="text-3xl font-extrabold text-amber-500 mt-2">₱{{ number_format($totalValue, 2) }}</div>
            </div>
        </div>

        <!-- Recent Subjects Table -->
        <div class="bg-white rounded-md shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
                <h3 class="font-bold text-gray-700">Enrolled Subjects & Tuition Fee Summary</h3>
                <a href="{{ route('products.index') }}" class="text-sm text-blue-600 hover:underline">View All Subjects &rarr;</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold">
                        <tr>
                            <th class="px-6 py-3">Code</th>
                            <th class="px-6 py-3">Subject / Course</th>
                            <th class="px-6 py-3">Category</th>
                            <th class="px-6 py-3">Instructor</th>
                            <th class="px-6 py-3 text-center">Units</th>
                            <th class="px-6 py-3 text-right">Tuition Fee</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($recentProducts as $subject)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-bold text-slate-800">{{ $subject->sku }}</td>
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $subject->name }}</td>
                                <td class="px-6 py-4">{{ $subject->category }}</td>
                                <td class="px-6 py-4">{{ $subject->supplier ?? 'TBA' }}</td>
                                <td class="px-6 py-4 text-center font-bold">{{ $subject->quantity }}</td>
                                <td class="px-6 py-4 text-right font-semibold text-slate-800">₱{{ number_format($subject->unit_price, 2) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">No subjects registered yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>