@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">All Employees </h5>
      <a href="{{ route('employees.create') }}" class="btn btn-primary">
        <i class="ti ti-plus me-1"></i>
      </a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Email</th>

            <th>Phone</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Bank Name</th>
            <th>Account #</th>
            <th>Edit</th>
            <!-- <th>Status</th> -->

          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse ($employees as $employee)
            <tr>
              <td>
                <!-- <i class="ti ti-building ti-md text-primary me-4"></i> -->
                <span class="fw-medium">{{ $employee->name.' '.$employee->last_name }}</span>
              </td>
              <td>
                {{ $employee->email }}
              </td>

  {{--      <td>
              <div class="d-flex justify-content-between align-items-center">
              <span class="text-danger">Suspended</span>

                  <div class="form-check form-switch mb-2">
                    <input data-status="{{ $employee->status }}"
                          data-id="{{ $employee->id }}"
                          class="form-check-input status-toggle"
                          {{ $employee->status->value == \App\userstatus::ACTIVE->value ? 'checked' : '' }}
                          type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                  </div>
                  <span class="text-success">Active</span>
              </div>

              </td> --}}
              <td>
                {{ $employee->phone}}
              </td>
              <td>
                {{ $employee->address}}
              </td>
              <td>
                {{ $employee->salary}}
              </td>
              <td>
                {{ $employee->bank}}
              </td>
              <td>
                {{ $employee->accountno}}
              </td>
              <td>
              <a href="{{route('employees.edit', $employee->id)}}">
                <button class="btn btn-warning"><i class="ti ti-edit me-2"></i></button>
              </a>

              <form method="POST" action="{{ route('employees.destroy', $employee->id) }}"  onsubmit="return confirm('Are you sure you want to delete this employee?');" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit"><i class="ti ti-trash me-2"></i></button>
                </form>

              </td>
              <td>
              {{--<span class="text-danger">Suspended</span>
                <div class="form-check form-switch mb-2">
                  <input data-status="{{$employee->user->status}}"
                        data-id="{{ $employee->user->id }}"
                        class="form-check-input status-toggle"
                        {{ $employee->user->status->value == \App\UserStatus::ACTIVE->value ? 'checked' : '' }}
                        type="checkbox" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                </div>
                <span class="text-success">Active</span>
                </div>
              </td> --}}
            </tr>
          @empty
            <tr>
              <td colspan="12" class="text-center">No employee found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
{{--
@push('scripts')
<script>

 $(document).on('change', '.status-toggle', function () {
      var userId = $(this).data('id');
      var newStatus = $(this).is(':checked') ? '{{ \App\UserStatus::ACTIVE->value }}' : '{{ \App\UserStatus::DEACTIVE->value }}';
      var checkbox = $(this);

      $.ajax({
          url: '{{ route("employee.toggleStatus") }}', // Add your toggle status route here
          method: 'POST',
          data: {
              _token: '{{ csrf_token() }}',
              user_id: userId,
              status: newStatus
          },
          success: function(response) {
            console.info(response.message);
              if (response.success) {
                  toastr.success(response.message); // Show success message
              } else {
                  toastr.error('Failed to change status.'); // Show error message
                  checkbox.prop('checked', !checkbox.is(':checked')); // Revert if the action fails
              }
          },
          error: function() {
              toastr.error('An error occurred while changing the status.'); // Show error message
              checkbox.prop('checked', !checkbox.is(':checked')); // Revert if AJAX fails
          }
      });
  });
</script>
<script>

    @if (session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if (session('error'))
        toastr.error("{{ session('error') }}");
    @endif
</script>
@endpush --}}
