<div class="modal fade" id="createPokemonModal" tabindex="-1" aria-labelledby="createPokemonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPokemonModalLabel">Crear Pokémon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createPokemonForm">
                    <div class="mb-3">
                        <label for="pokemonName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="pokemonName" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="pokemonType" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="pokemonType" name="tipo" required>
                    </div>
                    <div class="mb-3">
                        <label for="pokemonRegion" class="form-label">Región</label>
                        <input type="text" class="form-control" id="pokemonRegion" name="region" required>
                    </div>
                    <div class="mb-3">
                        <label for="pokemonLevel" class="form-label">Nivel</label>
                        <input type="number" class="form-control" id="pokemonLevel" name="nivel" required>
                    </div><div class="mb-3">
                        <label for="pokemonGender" class="form-label">Género</label>
                        <input type="text" class="form-control" id="pokemonGender" name="genero" required>
                    </div>
                    <div class="mb-3">
                        <label for="pokemonImage">Imagen:</label>
                        <input type="file" id="pokemonImage" name="imagen" accept="image/*">
                    </div>
                    <button type="submit" class="addPokemon" id="save">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
