<div
id="importModal"
class="fixed inset-0 items-center justify-center hidden bg-black bg-opacity-50"
>
    <div
    class="p-6 bg-white rounded-lg shadow-lg w-96"
    >
        <h2
        class="mb-4 text-lg font-semibold text-gray-700"
        >Import Candidates</h2>
        <form
        action="{{ route('CandidatesImport') }}"
        method="POST"
        enctype="multipart/form-data"
        >
            @csrf
            <input
            type="file" name="excel" required
            class="p-2 mb-4 mr-2 text-gray-700 border border-gray-300 rounded"
            >
            @if ($errors->any())
                <div class="mb-4 text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div
            class="flex justify-end">
                <button
                type="button" id="closeModal"
                class="px-4 py-2 mr-2 text-gray-700 bg-gray-300 rounded"
                >Cancel</button>
                <button
                type="submit"
                class="px-4 py-2 text-white bg-blue-500 rounded"
                >Import</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Get the modal and close button elements
    const modal = document.getElementById('importModal');
    const closeModalButton = document.getElementById('closeModal');
    const openModalButton = document.getElementById('openModal');

    // Function to hide the modal
    function hideModal() {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }

    // Event listener for the close button
    closeModalButton.addEventListener('click', hideModal);

    // Optional: Function to show the modal (you can call this function when you want to display the modal)
    function showModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
    openModalButton.addEventListener('click', showModal);
</script>

