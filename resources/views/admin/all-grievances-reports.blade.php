@extends('layouts.app')

@section('title', 'Grievance Reports')

@section('sidebar')
	@include('partials.sidebar-admin')
@endsection

@section('content')
<div class="flex flex-col min-h-screen">
	<!-- Breadcrumb -->
	<div class="px-3 -mt-4 mb-4">
		<nav class="text-sm text-gray-600 flex items-center space-x-1">
			<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4 mr-1">
				<path d="M3 9.75L12 3l9 6.75V21a1 1 0 0 1-1 1h-5.5a.5.5 0 0 1-.5-.5V15h-4v6.5a.5.5 0 0 1-.5.5H4a1 1 0 0 1-1-1V9.75z"/>
			</svg>
			<a href="{{ route('admin.dashboard') }}" class="hover:text-red-800">Dashboard</a>
			<span class="mx-1 text-gray-500">></span>
			<a href="{{ route('admin.all-grievances-reports') }}" class="text-blue-600 hover:underline">All Grievance Reports</a>
		</nav>
	</div>

	<div class="flex-1 max-w-6xl mx-auto px-1 overflow-x-hidden w-full">
		<div class="bg-white shadow-md rounded-lg p-6">
			<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
				<h2 class="text-2xl font-bold text-gray-800 mb-2 md:mb-0">Grievance Reports</h2>
				<div class="flex justify-end">
					<input type="text" placeholder="Search" class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
				</div>
			</div>
			<div class="overflow-x-auto">
				<table class="min-w-full text-sm">
					<thead class="bg-gray-50 text-gray-700">
						<tr>
							<th class="px-5 py-3 text-left font-semibold"><input type="checkbox" /></th>
							<th class="px-5 py-3 text-left font-semibold">Student ID</th>
							<th class="px-5 py-3 text-left font-semibold">Name</th>
							<th class="px-5 py-3 text-left font-semibold">Type</th>
							<th class="px-5 py-3 text-left font-semibold">Date Filed</th>
							<th class="px-5 py-3 text-left font-semibold">Status</th>
							<th class="px-5 py-3 text-left font-semibold">Filed By</th>
							<th class="px-5 py-3 text-left font-semibold">Actions</th>
						</tr>
					</thead>
					<tbody class="text-gray-700">
						<tr class="border-b last:border-b-0">
							<td class="px-5 py-3"><input type="checkbox" /></td>
							<td class="px-5 py-3">CASE-2025-001</td>
							<td class="px-5 py-3">Rona Arbe B. Limbago</td>
							<td class="px-5 py-3">Spot Report</td>
							<td class="px-5 py-3">2025-07-10</td>
							<td class="px-5 py-3">Open</td>
							<td class="px-5 py-3">Charm Gwapa</td>
							<td class="px-5 py-3 flex gap-2">
								<a href="#" class="text-green-600 hover:text-green-800" title="Edit">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6-6m2 2l-6 6m-2 2h6" />
									</svg>
								</a>
								<form action="#" method="POST" style="display:inline;">
									@csrf
									@method('DELETE')
									<button type="submit" class="text-red-600 hover:text-red-800" title="Delete" onclick="return confirm('Are you sure you want to delete this report?');">
										<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
										</svg>
									</button>
								</form>
							</td>
						</tr>
						<!-- Repeat for other rows as in screenshot -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
