
<h1>Edit Opportunity</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('opportunities.update', $opportunity->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="opportunity_status_id">Opportunity Status ID:</label>
        <input type="text" name="opportunity_status_id" id="opportunity_status_id" value="{{ $opportunity->opportunity_status_id }}" required>
    </div>

    <div>
        <label for="proposal">Proposal:</label>
        <input type="text" name="proposal" id="proposal" value="{{ $opportunity->proposal }}" required>
    </div>

    <div>
        <label for="initial_stage">Initial Stage:</label>
        <input type="text" name="initial_stage" id="initial_stage" value="{{ $opportunity->initial_stage }}" required>
    </div>

    <div>
        <label for="technical_stage">Technical Stage:</label>
        <input type="text" name="technical_stage" id="technical_stage" value="{{ $opportunity->technical_stage }}" required>
    </div>

    <div>
        <button type="submit">Update Opportunity</button>
    </div>
</form>

<a href="{{ route('opportunities.index') }}">Back to Opportunities</a>
