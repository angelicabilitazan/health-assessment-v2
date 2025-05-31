
<!--History 15-->
<div class="form-section step-section" id="step17">
  <hr />
  <div class="row mb-3">
    <div class="col-md-4">
      <label class="form-label">Current Alcohol Intake</label>
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          id="nonDrinker"
          name="currentAlcoholIntake"
          value="yes"
        />
        <label class="form-check-label" for="nonDrinker"
          >Non drinker</label
        >
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-4">
      <label class="form-label">Days per week:</label>
      <input
        type="text"
        class="form-control"
        id="daysPerWeek"
        name="daysPerWeek"
      />
    </div>
    <div class="col-md-4">
      <label class="form-label">Standard drinks per day:</label>
      <input
        type="text"
        class="form-control"
        id="drinksPerDay"
        name="drinksPerDay"
      />
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-8">
      <label class="form-label">Description:</label>
      <textarea
        class="form-control"
        id="currentDescription"
        rows="3"
        name="currentDescription"
      ></textarea>
    </div>
  </div>

  <h4>Past Alcohol Intake</h4>
  <hr />

  <div class="row mb-3">
    <div class="col-md-12">
      <label class="form-label">Past Alcohol Intake</label><br />
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="pastNil"
          name="pastAlcoholIntake"
          value="nil"
        />
        <label class="form-check-label" for="pastNil">Nil</label>
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="pastOccasional"
          name="pastAlcoholIntake"
          value="occasional"
        />
        <label class="form-check-label" for="pastOccasional"
          >Occasional</label
        >
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="pastModerate"
          name="pastAlcoholIntake"
          value="moderate"
        />
        <label class="form-check-label" for="pastModerate"
          >Moderate</label
        >
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="pastHeavy"
          name="pastAlcoholIntake"
          value="heavy"
        />
        <label class="form-check-label" for="pastHeavy">Heavy</label>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-4">
      <label class="form-label">Year started:</label>
      <input
        type="text"
        class="form-control"
        id="yearStarted"
        name="yearStarted"
      />
    </div>
    <div class="col-md-4">
      <label class="form-label">Year stopped:</label>
      <input
        type="text"
        class="form-control"
        id="yearStopped"
        name="yearStopped"
      />
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-8">
      <label class="form-label">Comment:</label>
      <textarea
        class="form-control"
        id="pastComment"
        rows="3"
        name="pastComment"
      ></textarea>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-4">
      <label class="form-label">CAGE Questions:</label>
      <input
        type="text"
        class="form-control"
        id="cageQuestions"
        name="cageQuestions"
      />
    </div>
    <div class="col-md-4">
      <label class="form-label">Standard Drinks:</label>
      <input
        type="text"
        class="form-control"
        id="standardDrinks"
        name="standardDrinks"
      />
    </div>
    <div class="col-md-4">
      <label class="form-label">Audit-C:</label>
      <input
        type="text"
        class="form-control"
        id="auditC"
        name="auditC"
      />
    </div>
  </div>
</div>
