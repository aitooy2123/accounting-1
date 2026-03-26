@extends('layouts.app')
@section('title', 'เพิ่มลูกค้า')

@section('content')

<div class="container py-5">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">➕ เพิ่มลูกค้า</h4>

    <a href="{{ route('customers.index') }}" class="btn btn-outline-secondary">
      ← ย้อนกลับ
    </a>
  </div>

  <div class="glass-card p-4">

    <form method="POST" action="{{ route('customers.store') }}">
      @csrf

      <div class="mb-3">
        <label class="fw-bold">รหัสลูกค้า</label>
        <input type="text" name="customer_code" class="form-control">
      </div>

      <div class="mb-3">
        <label class="fw-bold">ชื่อลูกค้า</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="fw-bold">บริษัท</label>
        <input type="text" name="company_name" class="form-control">
      </div>

      <div class="mb-3">
        <label class="fw-bold">โทรศัพท์</label>
        <input type="text" name="phone" class="form-control">
      </div>

      <div class="mb-3">
        <label class="fw-bold">Email</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="mb-4">
        <label class="fw-bold">ที่อยู่</label>
        <textarea name="address" rows="3" class="form-control"></textarea>
      </div>

      <button class="btn btn-primary fw-bold">
        💾 บันทึกข้อมูล
      </button>

    </form>

  </div>
</div>

@endsection
