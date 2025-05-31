<!--History 2-->
<div class="form-section step-section" id="step4">
  <h4>History</h4>
  <hr />
  <div class="row">
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Chest Pain</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="chestpain"
            id="chestpainYes"
            value="yes"
            {{ $detalye2->chest_pain === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="chestpainYes">Yes</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="chestpain"
            id="chestpainNo"
            value="no"
            {{ $detalye2->chest_pain === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="chestpainNo">No</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Dyspnoea</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="dyspnoea"
            id="dyspnoeaYes"
            value="yes"
            {{ $detalye2->dyspnoea === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="dyspnoeaYes">Yes</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="dyspnoea"
            id="dyspnoeaNo"
            value="no"
            {{ $detalye2->dyspnoea === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="dyspnoeaNo">No</label>
        </div>
      </div>
    </div>
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Orthopnoea</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="orthopnoea"
            id="orthopnoeaYes"
            value="yes"
            {{ $detalye2->orthopnoea === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="orthopnoeaYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="orthopnoea"
            id="orthopnoeaNo"
            value="no"
            {{ $detalye2->orthopnoea === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="orthopnoeaNo">No</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Nocturnal Dyspnoea</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="nocturnaldys"
            id="nocturnaldysYes"
            value="yes"
            {{ $detalye2->nocturnal_dyspnoea === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="nocturnaldysYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="nocturnaldys"
            id="nocturnaldysNo"
            value="no"
            {{ $detalye2->nocturnal_dyspnoea === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="nocturnaldysNo"
            >No</label
          >
        </div>
      </div>
    </div>
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Swollen Ankles</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="swollenank"
            id="swollenankYes"
            value="yes"
            {{ $detalye2->swollen_ankles === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="swollenankYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="swollenank"
            id="swollenankNo"
            value="no"
            {{ $detalye2->swollen_ankles === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="swollenankNo">No</label>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label">Palpitations</label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="palpitation"
            id="palpitationYes"
            value="yes"
            {{ $detalye2->palpitations === 1 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="palpitationYes"
            >Yes</label
          >
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="palpitation"
            id="palpitationNo"
            value="no"
            {{ $detalye2->palpitations === 0 ? 'checked' : '' }}
          />
          <label class="form-check-label" for="palpitationNo">No</label>
        </div>
      </div>
    </div>
    <div class="row col-6">
      <div class="col-4">
        <label class="form-label"><small>Claudication</small></label>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="claudication"
            id="claudicationYes"
            value="yes"
            {{ $detalye2->claudication === "yes" ? 'checked' : '' }}
          />
          <label class="form-check-label" for="claudicationYes"
            >Yes</label
          >
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="claudication"
            id="claudicationNo"
            value="no"
            {{ $detalye2->claudication === 'no' ? 'checked' : '' }}
          />
          <label class="form-check-label" for="claudicationNo"
            >No</label
          >
        </div>
      </div>
      <div class="col-2">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="claudication"
            id="claudicationBoth"
            value="both"
            {{ $detalye2->claudication === 'both' ? 'checked' : '' }}
          />
          <label class="form-check-label" for="claudicationBoth"
            >Both</label
          >
        </div>

        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="claudication"
            id="claudicationneither"
            value="neither"
            {{ $detalye2->claudication === 'neither' ? 'checked' : '' }}
          />
          <label class="form-check-label" for="claudicationNeither"
            >Neither</label
          >
        </div>
      </div>
    </div>
  </div>

  <div class="form-section">
    <h4>Examination</h4>
    <hr />

    <div class="row">
      <div class="col-2">
        <label class="form-label mt-2">JPV:</label>
      </div>
      <div class="col-2">
        <input type="text" id="jpv" name="jpv" class="form-control" />
      </div>
      <div class="col-2 mt-2">
        <p>cm</p>
      </div>
      <div class="col-3">
        <label class="form-label mt-2">Ankle oedema:</label>
      </div>
      <div class="col-3">
        <input
          type="text"
          id="ankleoedema"
          name="ankleoedema"
          class="form-control"
        />
      </div>
    </div>

    <div class="row mt-1">
      <div class="col-2">
        <label class="form-label mt-2">Apex beat:</label>
      </div>
      <div class="col-2">
        <input type="text" id="apex" name="apex" class="form-control" />
      </div>

      <div class="col-3">
        <label class="form-label mt-2">Intercostal space:</label>
      </div>
      <div class="col-2">
        <input
          type="text"
          id="intercostal"
          name="intercostal"
          class="form-control"
        />
      </div>
      <div class="col-3 mt-2">
        <small>cm from the midline</small>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-2">
        <label class="form-label">Heart sounds:</label>
      </div>
      <div class="col-3">
        <input
          type="text"
          id="heartsound"
          name="heartsound"
          class="form-control"
        />
      </div>
      <div class="col-7 mt-2">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            name="heart-murmur"
            value="heart-murmur"
            id="heart-murmur"
          />
          <label class="form-check-label" for="heart-murmur"
            >No Murmurs</label
          >
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <label class="form-label mt-1">Murmur:</label>
      <div class="col-2">
        <label class="form-label mt-1">Volume:</label>
      </div>
      <div class="col-4">
        <input
          type="text"
          id="murVol"
          name="murVol"
          class="form-control"
        />
      </div>
      <div class="col-2">
        <label class="form-label mt-1">Description:</label>
      </div>
      <div class="col-4">
        <input
          type="text"
          id="murDesc"
          name="murDesc"
          class="form-control"
        />
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-2">
        <label class="form-label mt-1">Radiation:</label>
      </div>
      <div class="col-4">
        <input
          type="text"
          id="murRad"
          name="murRad"
          class="form-control"
        />
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-2">
        <label class="form-label">Carotidbruit</label>
      </div>
      <div class="col-2">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="carotidbruit"
            id="carotidbruitYes"
            value="yes"
          />
          <label class="form-check-label" for="carotidbruitYes"
            >Yes</label
          >
        </div>

        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="carotidbruit"
            id="carotidbruitNo"
            value="no"
          />
          <label class="form-check-label" for="carotidbruitNo"
            >No</label
          >
        </div>
      </div>
      <div class="col-2">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="carotidbruit"
            id="carotidbruitBoth"
            value="no"
          />
          <label class="form-check-label" for="carotidbruitBoth"
            >Both</label
          >
        </div>

        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="carotidbruit"
            id="carotidbruitneither"
            value="no"
          />
          <label class="form-check-label" for="carotidbruitNeither"
            >Neither</label
          >
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-3">
        <label class="form-label">Peripheral pulses:</label>
        <label class="form-label mt-2 d-flex justify-content-end"
          >Brachial</label
        >
        <label class="form-label mt-3 d-flex justify-content-end"
          >Radial</label
        >
      </div>
      <div class="col-2">
        <label class="form-label">Right</label>
        <input
          type="text"
          id="periphRightBranchial"
          name="periphRightBranchial"
          class="form-control"
        />
        <input
          type="text"
          id="periphRightRadial"
          name="periphRightRadial"
          class="form-control mt-1"
        />
      </div>
      <div class="col-2">
        <label class="form-label">Left</label>
        <input
          type="text"
          id="periphLeftBranchial"
          name="periphLeftBranchial"
          class="form-control"
        />
        <input
          type="text"
          id="periphLeftRadial"
          name="periphLeftRadial"
          class="form-control mt-1"
        />
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-3">
        <label class="form-label mt-4 pt-3 d-flex justify-content-end"
          >Femoral</label
        >
        <label class="form-label mt-3 pt-1 d-flex justify-content-end"
          >Popliteal</label
        >
        <label class="form-label mt-3 pt-0 d-flex justify-content-end"
          >PT</label
        >
        <label class="form-label mt-3 pt-0 d-flex justify-content-end"
          >DP</label
        >
      </div>
      <div class="col-2">
        <label class="form-label">Right</label>
        <input
          type="text"
          id="femoralRight"
          name="femoralRight"
          class="form-control"
        />
        <input
          type="text"
          id="poplitealRight"
          name="poplitealRight"
          class="form-control mt-1"
        />
        <input
          type="text"
          id="PTRight"
          name="PTRight"
          class="form-control mt-1"
        />
        <input
          type="text"
          id="dpRight"
          name="dpRight"
          class="form-control mt-1"
        />
      </div>
      <div class="col-2">
        <label class="form-label">Left</label>
        <input
          type="text"
          id="femoralLeft"
          name="femoralLeft"
          class="form-control"
        />
        <input
          type="text"
          id="poplitealLeft"
          name="poplitealLeft"
          class="form-control mt-1"
        />
        <input
          type="text"
          id="PTLeft"
          name="PTLeft"
          class="form-control mt-1"
        />
        <input
          type="text"
          id="dpLeft"
          name="dpLeft"
          class="form-control mt-1"
        />
      </div>
    </div>
  </div>
</div>
