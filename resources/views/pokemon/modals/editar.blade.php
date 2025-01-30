<div class="modal fade" id="editPokemonModal" tabindex="-1" aria-labelledby="editPokemonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPokemonModalLabel">Editar Pokémon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editPokemonForm">
                    <div class="mb-3">
                        <label for="editPokemonName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editPokemonName" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPokemonType" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="editPokemonType" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPokemonRegion" class="form-label">Región</label>
                        <input type="text" class="form-control" id="editPokemonRegion" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPokemonLevel" class="form-label">Nivel</label>
                        <input type="number" class="form-control" id="editPokemonLevel" required>
                    </div>
                    <input type="hidden" id="editPokemonId">
                    <button type="submit" class="save-changes-btn btn btn-primary">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
