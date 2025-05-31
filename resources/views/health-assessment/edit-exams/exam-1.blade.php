<div class="step-section active" id="step1">
  <h4>Patient Details</h4>
  <hr />
  <div class="row">
    <div class="mb-3 col-6">
      <label for="fname" class="form-label">First Name</label>
      <input
        type="text"
        id="fname"
        name="firstName"
        class="form-control"
        value="{{$item->first_name}}"
        required
      />
    </div>

    <div class="mb-3 col-6">
      <label for="lname" class="form-label">Last Name</label>
      <input
        type="text"
        id="lname"
        name="lastName"
        class="form-control"
        required
      />
    </div>
  </div>
  <div class="row">
    <div class="mb-3 col-6">
      <label for="pname" class="form-label">Preferred Name</label>
      <input
        type="text"
        id="pname"
        name="preferredName"
        class="form-control"
      />
    </div>
    <div class="mb-3 col-6">
      <label for="dob" class="form-label">Date of Birth</label>
      <input type="date" id="dob" name="dob" class="form-control" />
    </div>
  </div>
  <div class="row">
    <div class="mb-3 col-6">
      <label for="alocation" class="form-label"
        >Admitted Location</label
      >
      <input
        type="text"
        id="alocation"
        name="alocation"
        class="form-control"
      />
    </div>
    <div class="mb-3 col-6">
      <label for="doa" class="form-label">Admission Date</label>
      <input type="date" id="doa" name="doa" class="form-control" />
    </div>
  </div>
  <div class="row">
    <div class="mb-3 col-4">
      <label for="acfid" class="form-label">ACF ID</label>
      <input type="text" id="acfid" name="acfid" class="form-control" />
    </div>
    <div class="mb-3 col-4">
      <label for="mednum" class="form-label">Medicare No.</label>
      <input
        type="text"
        id="mednum"
        name="mednum"
        class="form-control"
      />
    </div>
    <div class="mb-3 col-4">
      <label for="pensionnum" class="form-label"
        >Pension Entitlement No.</label
      >
      <input
        type="text"
        id="pensionnum"
        name="pensionnum"
        class="form-control"
      />
    </div>
  </div>
  <!-- Next of Kin -->
  <div class="form-section">
    <h4 class="mt-4">Next of Kin Information</h4>
    <hr />

    <div class="mb-3">
      <label for="kin-name" class="form-label">Next of Kin Name</label>
      <input
        type="text"
        id="kin-name"
        name="kinName"
        class="form-control"
      />
    </div>
    <div class="row">
      <div class="mb-3 col-4">
        <label for="kin-phone" class="form-label">Phone Number</label>
        <input
          type="tel"
          id="kin-phone"
          name="kinPhone"
          class="form-control"
          placeholder="e.g., 0421234567"
        />
      </div>

      <div class="mb-3 col-4">
        <label for="kin-work" class="form-label">Work Number</label>
        <input
          type="tel"
          id="kin-work"
          name="kinWork"
          class="form-control"
          placeholder="e.g., 0421234567"
        />
      </div>

      <div class="mb-3 col-4">
        <label for="kin-mobile" class="form-label">Mobile Number</label>
        <input
          type="tel"
          id="kin-mobile"
          name="kinMobile"
          class="form-control"
          placeholder="e.g., 0421234567"
        />
      </div>
    </div>
  </div>
</div>

<!-- Family History -->
<div class="form-section step-section" id="step2">
  <h4>Family History</h4>
  <hr />

  <div class="row px-2">
    <div class="form-check col-6">
      <input
        class="form-check-input"
        type="checkbox"
        name="family-history-unknown"
        value="1"
        id="unknown-adopted"
      />
      <label class="form-check-label" for="unknown-adopted"
        >Unknown (e.g Adopted)</label
      >
    </div>
    <div class="form-check col-6">
      <input
        class="form-check-input"
        type="checkbox"
        name="family-history-none"
        value="1"
        id="no-significant-fam-history"
      />
      <label class="form-check-label" for="no-significant-fam-history"
        >No significant Family history</label
      >
    </div>
  </div>

  <h4 class="pt-4">Past Medical history</h4>
  <hr />
    <div>
    <label for="allergy-history" class="form-label"
      >Allergy:</label
    >
    <textarea
      class="form-control"
      name="allergy-history"
      rows="5"
    ></textarea>
  </div>
  <div>
    <label for="past-medical-history" class="form-label"
      >Past Medical History:</label
    >
    <textarea
      class="form-control"
      name="past-medical-history"
      rows="5"
    ></textarea>
  </div>
</div>