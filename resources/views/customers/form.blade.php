<div class="form-group pb-2">
    <label>Name: </label>
    <input type="text" name="name" class="form-control" value="{{ old('name') ?? $customer->name }}">
    <div>{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="email">Email: </label>
    <input type="text" name="email" class="form-control" value="{{ old('email') ?? $customer->email }}">
    <div>{{ $errors->first('email') }}</div>
</div>
<div class="form-group">
    <label>Status: </label>
    <select class="form-control" name="active" id="active">
        <option value="" disabled>Select an Option</option>
        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue  ?  'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="company_id">Company: </label>
    <select class="form-control" name="company_id" id="company_id">
        @foreach($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach

    </select>
</div>

@csrf
