<div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-8"><h5 class="card-title">Email Accounts</h5></div>
            <div class="col-sm-4 text-end"><a href="#"><i class="fa fa-plus" data-bs-toggle="modal" data-bs-target="#emailAddressModal"></i></a></div>
        </div>

    </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="card-footer">
        {{-- {{ $accounts->links() }} --}}
    </div>
</div>
<div class="modal" tabindex="-1" id="emailAddressModal" aria-labelledby="emailAddressModal" aria-hidden="true"  wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">{{ $modal_title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row mb-3">
                <label for="is_imap" class="col-sm-4">Is IMAP</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" wire:model="is_imap"  id="is_imap">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label">Incoming Mail</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" wire:model="incoming_mail" >
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label">Incoming Port</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" wire:model="incoming_port">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label">Incoming SSL</label>
                <div class="col-sm-8">
                    <select class="form-select" wire:model="incoming_ssl">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="incoming_spa" class="col-sm-4">Incoming SPA</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" wire:model="incoming_spa" id="incoming_spa">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label">Outgoing Mail</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" wire:model="outgoing_mail" >
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label">Outgoing Port</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" wire:model="outgoing_port">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label">Encription Method</label>
                <div class="col-sm-8">
                    <select class="form-select" wire:model="encription_method">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="outgoing_spa" class="col-sm-4">Incoming SPA</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" wire:model="outgoing_spa" id="outgoing_spa">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label">Color</label>
                <div class="col-sm-8">
                  <input type="color" class="form-control" wire:model="color" >
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label">Directory</label>
                <div class="col-sm-8">
                    <select class="form-select" wire:model="directory">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" wire:click.prevent="EmailAccountsAction">Save changes</button>
        </div>
        </div>
    </div>
</div>
</div>

