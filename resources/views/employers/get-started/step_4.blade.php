<div class="card card-body">
    <h3>Preview Job</h3>
</div>

<div class="card card-body">
    <div class="border border-2 p-3">
        <h3>{{ $job_title }}</h3>
        <h6 style="opacity: .5; font-weight: 300;">
            {{ $company_name_for_this_job }} - {{ $location }}
        </h6>

        <div class="my-3">
            {!! $description !!}
        </div>

        <p><b>Job Type:</b> {{ $employment_type }}</p>
        <p>
            <b>Salary:</b>
            {{ $this->salary }} {{ $compensation_interval }}
        </p>
    </div>

    <h5 class="my-4">Application Settings</h5>

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>Application Method</span>
            <span>{{ $application_method }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>CV</span>
            <span>{{ $require_cv ? 'Required' : 'Optional' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>Application Deadline</span>
            <span>{{ $has_application_deadline ? $application_deadline : 'No deadline' }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>Application Assistant</span>
            <span>{{ $application_assistant ? "$close_applications_after days" : 'Not in use' }}</span>
        </li>
    </ul>
</div>

<p class="text-muted">
    By continuing, you are confirming that you agree with out
    <a href="#/">Privacy Policy</a> and
    <a href="#/">Terms of Service</a>.
</p>
