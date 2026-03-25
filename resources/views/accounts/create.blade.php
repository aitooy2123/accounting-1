@extends('layouts.app')

@section('title', 'เพิ่มผังบัญชี')

@section('content')

  <div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold mb-0">➕ เพิ่มผังบัญชี</h4>

      <a href="{{ route('accounts.index') }}" class="btn btn-outline-secondary">
        ← ย้อนกลับ
      </a>
    </div>

    <div class="glass-card p-4">

      <form action="{{ route('accounts.store') }}" method="POST" onsubmit="disableBtn()">

        @csrf

        <div class="mb-3">

          <label class="fw-bold">รหัสบัญชี</label>

          <input type="text" name="code" id="code"
            class="form-control @error('code') is-invalid @enderror"
            value="{{ old('code') }}" required>

          @error('code')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

        </div>

        <div class="mb-3">

          <label class="fw-bold">ชื่อบัญชี</label>

          <input type="text" name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') }}" required>

          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

        </div>

        <div class="mb-3">

          <label class="fw-bold">ประเภทบัญชี</label>

          <select name="type"
            class="form-control @error('type') is-invalid @enderror"
            required>

            <option value="">-- เลือกประเภทบัญชี --</option>
            <option value="asset" {{ old('type') == 'asset' ? 'selected' : '' }}>สินทรัพย์</option>
            <option value="liability" {{ old('type') == 'liability' ? 'selected' : '' }}>หนี้สิน</option>
            <option value="equity" {{ old('type') == 'equity' ? 'selected' : '' }}>ทุน</option>
            <option value="income" {{ old('type') == 'income' ? 'selected' : '' }}>รายได้</option>
            <option value="expense" {{ old('type') == 'expense' ? 'selected' : '' }}>ค่าใช้จ่าย</option>

          </select>

          @error('type')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

        </div>

        <div class="mt-4">

          <button id="submitBtn" class="btn btn-primary fw-bold">
            💾 บันทึกข้อมูล
          </button>

        </div>

      </form>

    </div>

  </div>


  <style>
    .glass-card {
      backdrop-filter: blur(14px);
      background: rgba(255, 255, 255, 0.75);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    body.dark-mode .glass-card {
      background: rgba(30, 41, 59, 0.7);
      color: #f1f5f9;
    }
  </style>


  <script>
    function disableBtn() {
      document.getElementById('submitBtn').disabled = true;
    }

    document.getElementById('code').addEventListener('input', function() {
      this.value = this.value.replace(/[^0-9\-]/g, '');
    });

    if (localStorage.getItem('darkMode') === 'true') {
      document.body.classList.add('dark-mode');
    }
  </script>

@endsection
