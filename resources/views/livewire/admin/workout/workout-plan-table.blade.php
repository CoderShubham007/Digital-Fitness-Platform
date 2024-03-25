<div x-show="workoutPlansTable">
    <div class="row mb-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Workout Plan Table</h6>
                    <button class="btn btn-sm btn-primary my-1" x-on:click='workoutPlansTable = false, addWorkoutPlan = true'>Add New Workout Plan</button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID</th>
                                    <th
                                        class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Level</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="ms-3 text-xs font-weight-bold">14</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-xs font-weight-bold">DUMBELL BENCH PRESS</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-sm bg-gradient-primary">Begineer</span>
                                    </td>
                                    <td class="text-center">
                                        <button class="me-2 btn btn-xs btn-dark mb-0" x-on:click="workoutPlansTable = false, manageWorkoutPlan = true">Manage</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
