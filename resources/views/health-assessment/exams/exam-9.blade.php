
<!--History 8-->
<div class="form-section step-section" id="step10">
  <h4>History:</h4>
  <hr />
  <div class="row mb-2">
    <div class="col-md-4">
      <label class="form-label">Rash</label>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="rashYes"
          name="rash"
          value="yes"
        />
        <label class="form-check-label" for="rashYes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="rashNo"
          name="rash"
          value="no"
        />
        <label class="form-check-label" for="rashNo">No</label>
      </div>
    </div>
    <div class="col-md-4">
      <label class="form-label">Itch</label>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="itchYes"
          name="itch"
          value="yes"
        />
        <label class="form-check-label" for="itchYes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="itchNo"
          name="itch"
          value="no"
        />
        <label class="form-check-label" for="itchNo">No</label>
      </div>
    </div>
    <div class="col-md-4">
      <label class="form-label">Lesion</label>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="lesionYes"
          name="lesion"
          value="yes"
        />
        <label class="form-check-label" for="lesionYes">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          id="lesionNo"
          name="lesion"
          value="no"
        />
        <label class="form-check-label" for="lesionNo">No</label>
      </div>
    </div>
    
  </div>

  <h4>Examination:</h4>
  <hr />
  <div class="row mb-2">
    <div class="col-md-4">
      <label class="form-label">Lesions</label>
      <textarea
        class="form-control"
        id="lesionDescription"
        rows="3"
      ></textarea>
    
      <label for="skin-issues" class="form-label"
        >Skin-issues:</label
      >
      <textarea
        class="form-control"
        id="skin-issues"
        rows="5"
      ></textarea>
    </div>
    <div class="col-md-8">
      <label class="form-label">Diagrams:</label> <br />
      <img
        id="bodyDiagram"
        src="https://drive.google.com/thumbnail?id=15Nl6HX25w5F92lh7BBFDq1ityCRpvEWL"
        alt="Body Diagram"
        style="max-width: 100%; height: auto"
      />
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-4">
      <label class="form-label">Rash</label>
      <input
        type="text"
        class="form-control"
        id="rashDescription"
        placeholder="Enter rash description"
      />
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-8">
      <label class="form-label">Distribution</label>
      <div class="row">
        <div class="col-md-6">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionFace"
              value="face"
            />
            <label class="form-check-label" for="distributionFace"
              >Face</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionScalp"
              value="scalp"
            />
            <label class="form-check-label" for="distributionScalp"
              >Scalp</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionNeck"
              value="neck"
            />
            <label class="form-check-label" for="distributionNeck"
              >Neck</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionForehead"
              value="forehead"
            />
            <label class="form-check-label" for="distributionForehead"
              >Forehead</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionCheek"
              value="cheek"
            />
            <label class="form-check-label" for="distributionCheek"
              >Cheek</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionNose"
              value="nose"
            />
            <label class="form-check-label" for="distributionNose"
              >Nose</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionChest"
              value="chest"
            />
            <label class="form-check-label" for="distributionChest"
              >Chest</label
            >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionBack"
              value="back"
            />
            <label class="form-check-label" for="distributionBack"
              >Back</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionAbdomen"
              value="abdomen"
            />
            <label class="form-check-label" for="distributionAbdomen"
              >Abdomen</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionShoulder"
              value="shoulder"
            />
            <label class="form-check-label" for="distributionShoulder"
              >Shoulder(s)</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionArm"
              value="arm"
            />
            <label class="form-check-label" for="distributionArm"
              >Arm(s)</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionHand"
              value="hand"
            />
            <label class="form-check-label" for="distributionHand"
              >Hand(s)</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionLeg"
              value="leg"
            />
            <label class="form-check-label" for="distributionLeg"
              >Leg(s)</label
            >
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="distributionFoot"
              value="foot"
            />
            <label class="form-check-label" for="distributionFoot"
              >Foot/Feet</label
            >
          </div>
        </div>
      </div>
      <input
        type="text"
        class="form-control mt-2"
        id="distributionOther"
        placeholder="Other distribution"
      />
    </div>
  </div>
</div>
