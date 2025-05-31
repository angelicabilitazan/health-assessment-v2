<!--History 1-->
<div class="form-section step-section" id="step3">
  <h4>History</h4>
  <hr />
  <div class="row">
    <div class="row col-6">
      <div class="col-4"><label class="form-label">Fever</label></div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="fever"
            id="feverYes"
            value="yes"
            {{ $detalye1->fever === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="feverYes">Yes</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="fever"
            id="feverNo"
            value="no"
            {{ $detalye1->fever === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="feverNo">No</label>
        </div>
      </div>
    </div>
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Lethargy</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="lethargy"
            id="lethargyYes"
            value="yes"
            {{ $detalye1->lethargy === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="lethargyYes">Yes</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="lethargy"
            id="lethargyNo"
            value="no"
            {{ $detalye1->lethargy === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="lethargyNo">No</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row col-6">
      <div class="col-4"><label class="form-label">Malaise</label></div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="malaise"
            id="malaiseYes"
            value="yes"
            {{ $detalye1->malaise === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="malaiseYes">Yes</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="malaise"
            id="malaiseNo"
            value="no"
            {{ $detalye1->malaise === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="malaiseNo">No</label>
        </div>
      </div>
    </div>
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Anorexia</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="anorexia"
            id="anorexiaYes"
            value="yes"
            {{ $detalye1->anorexia === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="anorexiaYes">Yes</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="anorexia"
            id="anorexiaNo"
            value="no"
            {{ $detalye1->anorexia === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="anorexiaNo">No</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row col-6">
      <div class="col-4"><label class="form-label">Nausea</label></div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="nausea"
            id="nauseaYes"
            value="yes"
            {{ $detalye1->nausea === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="nauseaYes">Yes</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="nausea"
            id="nauseaNo"
            value="no"
            {{ $detalye1->nausea === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="nauseaNo">No</label>
        </div>
      </div>
    </div>
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Giddiness</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="giddiness"
            id="giddinessYes"
            value="yes"
            {{ $detalye1->giddiness === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="giddinessYes">Yes</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="giddiness"
            id="giddinessNo"
            value="no"
            {{ $detalye1->giddiness === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="giddinessNo">No</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label"><small>Weight Loss</small></label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="weightloss"
            id="weightlossYes"
            value="yes"
            {{ $detalye1->weightloss === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="weightlossYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="weightloss"
            id="weightlossNo"
            value="no"
            {{ $detalye1->weightloss === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="weightlossNo">No</label>
        </div>
      </div>
    </div>
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label"><small>Weight gain</small></label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="weightgain"
            id="weightgainYes"
            value="yes"
            {{ $detalye1->weightgain === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="weightgainYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="weightgain"
            id="weightgainNo"
            value="no"
            {{ $detalye1->weightgain === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="weightgainNo">No</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label"><small>Recent Travel</small></label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="recenttravel"
            id="recenttravelYes"
            value="yes"
            {{ $detalye1->recenttravel === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="recenttravelYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="recenttravel"
            id="recenttravelNo"
            value="no"
            {{ $detalye1->recenttravel === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="recenttravelNo"
            >No</label
          >
        </div>
      </div>
    </div>
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label"><small>Loss of taste</small></label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="lossoftaste"
            id="lossoftasteYes"
            value="yes"
            {{ $detalye1->lossoftaste === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="lossoftasteYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="lossoftaste"
            id="lossoftasteNo"
            value="no"
            {{ $detalye1->lossoftaste === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="lossoftasteNo">No</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label"><small>Loss of Smell</small></label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="lossofsmell"
            id="lossofsmellYes"
            value="yes"
            {{ $detalye1->lossofsmell === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="lossofsmellYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="lossofsmell"
            id="lossofsmellNo"
            value="no"
            {{ $detalye1->lossofsmell === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="lossofsmellNo">No</label>
        </div>
      </div>
    </div>
  </div>

  <div class="form-section">
    <h4>Examination</h4>
    <hr />
    <div class="row">
      <div class="row col-6">
        <div class="col-6">
          <label class="form-label">Clinically Anemic</label>
        </div>
        <div class="col-3">
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="clinicallyanemic"
              id="clinicallyanemicYes"
              value="yes"
              {{ $detalye12->clinically_anemic === 1 ? 'checked' : '' }}
            />
            <label class="form-check-label" for="clinicallyanemicYes"
              >Yes</label
            >
          </div>
        </div>
        <div class="col-3">
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="clinicallyanemic"
              id="clinicallyanemicNo"
              value="no"
              {{ $detalye12->clinically_anemic === 0 ? 'checked' : '' }}
            />
            <label class="form-check-label" for="clinicallyanemicNo"
              >No</label
            >
          </div>
        </div>
      </div>
      <div class="row col-6">
        <div class="col-6">
          <label class="form-label">Jaundiced</label>
        </div>
        <div class="col-3">
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="jaundiced"
              id="jaundicedYes"
              value="yes"
              {{ $detalye12->jaundiced === 1 ? 'checked' : '' }}
            />
            <label class="form-check-label" for="jaundicedYes"
              >Yes</label
            >
          </div>
        </div>
        <div class="col-3">
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="jaundiced"
              id="jaundicedNo"
              value="no"
              {{ $detalye12->jaundiced === 0 ? 'checked' : '' }}
            />
            <label class="form-check-label" for="jaundicedNo">No</label>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="row">
        <div class="col-2 mt-3">
          <label class="form-label mt-1">Pulse:</label>
        </div>
        <div class="col-3 mt-3">
          <input
            type="text"
            id="pulse"
            name="pulse"
            class="form-control"
            value="{{ $detalye12->pulse}}"
          />
        </div>
      </div>
      <div class="row col-12 mt-3">
        <div class="col-3">
          <label class="form-label">Blood Pressure:</label>
        </div>
        <div class="col-2">
          <label class="form-label mt-1">Sitting</label>
        </div>
        <div class="row col-7">
          <div class="col-3">
            <input
              type="text"
              value="{{ $detalye12->sitting_bp_top }}"
              id="sitting-bp-top"
              name="sitting-bp-top"
              class="form-control"
            />
          </div>
          /
          <div class="col-3">
            <input
              type="text"
              value="{{ $detalye12->sitting_bp_low }}"
              id="sitting-bp-low"
              name="sitting-bp-low"
              class="form-control"
            />
          </div>
        </div>
      </div>

      <div class="row col-12 mt-1">
        <div class="col-3"></div>
        <div class="col-2">
          <label class="form-label mt-1">Standing</label>
        </div>
        <div class="row col-7">
          <div class="col-3">
            <input
              type="text"
              value="{{ $detalye12->standing_bp_top}}"
              id="standing-bp-top"
              name="standing-bp-top"
              class="form-control"
            />
          </div>
          /
          <div class="col-3">
            <input
              type="text"
              value="{{ $detalye12->standing_bp_low}}"
              id="standing-bp-low"
              name="standing-bp-low"
              class="form-control"
            />
          </div>
        </div>
      </div>
      <div class="row col-12 mt-1">
        <div class="col-3"></div>
        <div class="col-2">
          <label class="form-label mt-1">Lying</label>
        </div>
        <div class="row col-7">
          <div class="col-3">
            <input
              type="text"
              value="{{ $detalye12->lying_bp_top}}"
              id="lying-bp-top"
              name="lying-bp-top"
              class="form-control"
            />
          </div>
          /
          <div class="col-3">
            <input
              type="text"
              value="{{ $detalye12->lying_bp_low}}"
              id="lying-bp-low"
              name="lying-bp-low"
              class="form-control"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-2">
        <label class="form-label mt-1">Temp:</label>
      </div>
      <div class="col-2">
        <input type="text" value="{{ $detalye12->temp}}" id="temp" name="temp" class="form-control" />
      </div>
      <div class="col-3">
        <input
          type="text"
          value="{{ $detalye12->temp_desc}}"
          id="temp-desc"
          name="temp-desc"
          class="form-control"
          placeholder="e.g Tympanic"
        />
      </div>
      <div class="col-2 mt-1">
        <label class="form-label">Resp. rate:</label>
      </div>
      <div class="col-3">
        <input
          type="text"
          value="{{ $detalye12->resp_rate}}"
          id="resp-rate"
          name="resp-rate"
          class="form-control"
        />
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-2">
        <label class="form-label mt-1">Weight(kg):</label>
      </div>
      <div class="col-2">
        <input
          type="text"
          value="{{ $detalye12->weight_kg}}"
          id="weight"
          name="weight"
          class="form-control"
        />
      </div>
      <div class="col-2">
        <label class="form-label mt-1">Height(cm):</label>
      </div>
      <div class="col-2">
        <input
          type="text"
          value="{{ $detalye12->height_cm}}"
          id="height"
          name="height"
          class="form-control"
        />
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-2">
        <label class="form-label mt-1">BSL:</label>
      </div>
      <div class="col-4">
        <input type="text" id="bsl" name="bsl" value="{{$detalye12->bsl}}" class="form-control" />
      </div>
      <div class="col-4">
        <input
          type="text"
          value="{{ $detalye12->bsl_desc}}"
          id="bsl-desc"
          name="bsl-desc"
          class="form-control"
        />
      </div>
    </div>
    <div class="row mt-3">
      <div class="row col-4 mt-1">
        <label class="form-label">Waist Measurement:</label>
      </div>
      <div class="col-2">
        <input
          type="text"
          value="{{ $detalye12->waist_measurement_cm}}"
          id="waist"
          name="waist"
          class="form-control"
        />
      </div>
      <div class="row col-4">
        <label class="form-label mt-1">Hip Measurement:</label>
      </div>
      <div class="col-2">
        <input
          type="text"
          value="{{ $detalye12->hip_measurement_cm}}"
          id="hip-measurement"
          name="hip-measurement"
          class="form-control"
        />
      </div>
    </div>
    <div class="row col-8 mt-3">
      <div class="col-4">
        <label class="form-label mt-2">BMI</label>
      </div>
      <div class="col-5">
        <input
          type="text"
          value="{{ $detalye12->bmi}}"
          id="bmi"
          name="bmi"
          class="form-control"
        />
      </div>
    </div>
    <div class="row mt-3">
      <div class="row col-3 mt-2">
        <label class="form-label">O2 Saturation</label>
      </div>
      <div class="col-4">
        <input
          type="text"
          value="{{ $detalye12->o2_saturation_percent}}"
          id="saturation"
          name="saturation"
          class="form-control"
          placeholder="Percent(%)"
        />
      </div>
    </div>
  </div>
</div>
