@extends('layouts.app')

@section('title', 'Manage Students')

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
			<a href="{{ route('admin.manage-staff') }}" class="text-blue-600 hover:underline">Manage Students</a>
		</nav>
	</div>

	<div class="flex-1 px-6 w-full">
		<div class="bg-white shadow-md rounded-lg p-6">
			<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
				<h2 class="text-2xl font-bold text-gray-800 mb-2 md:mb-0">Student Accounts</h2>
				<div class="flex justify-end">
					<input type="text" placeholder="Search" class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
				</div>
			</div>
			<div class="overflow-x-auto">
				<table class="min-w-full text-sm">
					<thead class="bg-gray-50 text-gray-700">
						<tr>
							<th class="px-5 py-3 text-left font-semibold">Student ID</th>
							<th class="px-5 py-3 text-left font-semibold">Name</th>
							<th class="px-5 py-3 text-left font-semibold">Program & Year</th>
							<th class="px-5 py-3 text-left font-semibold">Email</th>
							<th class="px-5 py-3 text-left font-semibold">Status</th>
							<th class="px-5 py-3 text-left font-semibold">Actions</th>
						</tr>
					</thead>
					<tbody class="text-gray-700">
						<tr class="border-b last:border-b-0">
							<td class="px-5 py-3">
								<div class="flex items-center gap-3">
									<input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
									<span>2022-00270</span>
								</div>
							</td>
							<td class="px-5 py-3">Rona Arbe B. Limbago</td>
							<td class="px-5 py-3">BSIT - 4A</td>
							<td class="px-5 py-3">rablimbago00270@usep.edu.ph</td>
							<td class="px-5 py-3"><span class="inline-flex items-center px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Active</span></td>
							<td class="px-5 py-3">
								<div class="flex space-x-2">
									<a href="{{ route('admin.students.edit', 1) }}" class="text-blue-600 hover:text-blue-800">
										<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
										</svg>
									</a>
									<form method="POST" action="{{ route('admin.students.destroy', 1) }}" class="inline">
										@csrf
										@method('DELETE')
										<button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this student?')">
											<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
											</svg>
										</button>
									</form>
								</div>
							</td>
						</tr>
						<tr class="border-b last:border-b-0">
							<td class="px-5 py-3">
								<div class="flex items-center gap-3">
									<input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
									<span>2022-00002</span>
								</div>
							</td>
							<td class="px-5 py-3">John Michael Santos</td>
							<td class="px-5 py-3">BSIT - 4B</td>
							<td class="px-5 py-3">jsantos@usep.edu.ph</td>
                            <td class="px-5 py-3"><span class="inline-flex items-center px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Active</span></td>
							<td class="px-5 py-3">
								<div class="flex space-x-2">
									<a href="{{ route('admin.students.edit', 2) }}" class="text-blue-600 hover:text-blue-800">
										<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
										</svg>
									</a>
									<form method="POST" action="{{ route('admin.students.destroy', 2) }}" class="inline">
										@csrf
										@method('DELETE')
										<button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this student?')">
											<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
											</svg>
										</button>
									</form>
								</div>
							</td>
						</tr>
						<tr class="border-b last:border-b-0">
							<td class="px-5 py-3">
								<div class="flex items-center gap-3">
									<input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
									<span>2022-00003</span>
								</div>
							</td>
							<td class="px-5 py-3">Camille P. Vergara</td>
							<td class="px-5 py-3">BSHM - 4A</td>
							<td class="px-5 py-3">jsantos@usep.edu.ph</td>
                            <td class="px-5 py-3"><span class="inline-flex items-center px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Active</span></td>
							<td class="px-5 py-3">
								<div class="flex space-x-2">
									<a href="{{ route('admin.students.edit', 3) }}" class="text-blue-600 hover:text-blue-800">
										<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
										</svg>
									</a>
									<form method="POST" action="{{ route('admin.students.destroy', 3) }}" class="inline">
										@csrf
										@method('DELETE')
										<button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this student?')">
											<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
											</svg>
										</button>
									</form>
								</div>
							</td>
						</tr>
				
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
