@extends('layouts.app')

@section('title', 'Action History')

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
			<a href="{{ route('admin.action-history') }}" class="text-blue-600 hover:underline">Action History</a>
		</nav>
	</div>

	<div class="flex-1 max-w-6xl mx-auto px-1 overflow-x-hidden w-full">
		<div class="bg-white shadow-md rounded-lg p-6">
			<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
				<h2 class="text-2xl font-bold text-gray-800 mb-2 md:mb-0">History</h2>
			</div>
			<div class="overflow-x-auto">
				<table class="min-w-full text-sm">
					<thead class="bg-gray-50 text-gray-700">
						<tr>
							<th class="px-5 py-3 text-left font-semibold">Date & Time</th>
							<th class="px-5 py-3 text-left font-semibold">Action</th>
							<th class="px-5 py-3 text-left font-semibold">Performed By</th>
							<th class="px-5 py-3 text-left font-semibold">Target</th>
							<th class="px-5 py-3 text-left font-semibold">Details</th>
						</tr>
					</thead>
					<tbody class="text-gray-700">
						<tr class="border-b last:border-b-0">
							<td class="px-5 py-3">2025-07-08 09:15</td>
							<td class="px-5 py-3">Grievance Filed</td>
							<td class="px-5 py-3">Maria D. Reyes (Staff)</td>
							<td class="px-5 py-3">Juan P. Cruz</td>
							<td class="px-5 py-3">Spot Report filed (CASE-2025-001)</td>
						</tr>
						<tr class="border-b last:border-b-0">
							<td class="px-5 py-3">2025-08-21 14:00</td>
							<td class="px-5 py-3">Grievance Updated</td>
							<td class="px-5 py-3">John M. Santos (Staff)</td>
							<td class="px-5 py-3">CERT-2025-002</td>
							<td class="px-5 py-3">Status changed to "Resolved"</td>
						</tr>
						<tr class="border-b last:border-b-0">
							<td class="px-5 py-3">2025-08-22 13:00</td>
							<td class="px-5 py-3">Grievance Updated</td>
							<td class="px-5 py-3">Camille P. Vergara (Staff)</td>
							<td class="px-5 py-3">CERT-2025-003</td>
							<td class="px-5 py-3">Status changed to "Resolved"</td>
						</tr>
						<tr class="border-b last:border-b-0">
							<td class="px-5 py-3">2025-08-23 08:45</td>
							<td class="px-5 py-3">Student Account Blocked</td>
							<td class="px-5 py-3">Admin (Carlo Dominguez)</td>
							<td class="px-5 py-3">Andrea Morales</td>
							<td class="px-5 py-3">Reason: Multiple violations</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
