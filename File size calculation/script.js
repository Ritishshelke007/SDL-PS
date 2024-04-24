function calculateFileSize() {
  const fileInput = document.getElementById("file-input");

  if (fileInput.files.length > 0) {
    const file = fileInput.files[0];

    const reader = new FileReader();

    reader.onload = function (event) {
      const fileContent = event.target.result;

      const fileSizeBytes = file.size;

      // Calculate file size in different units
      const fileSizeKB = fileSizeBytes / 1024;
      const fileSizeMB = fileSizeKB / 1024;
      const fileSizeGB = fileSizeMB / 1024;

      // Display results in HTML
      let resultHTML = "<h2>File Size Calculation Result</h2>";
      resultHTML += `<p>File name: ${file.name}</p>`;
      resultHTML += `<p>File size in bytes: ${fileSizeBytes} bytes</p>`;
      resultHTML += `<p>File size in kilobytes: ${fileSizeKB.toFixed(
        2
      )} KB</p>`;
      resultHTML += `<p>File size in megabytes: ${fileSizeMB.toFixed(
        2
      )} MB</p>`;
      resultHTML += `<p>File size in gigabytes: ${fileSizeGB.toFixed(
        7
      )} GB</p>`;

      document.getElementById("result-container").innerHTML = resultHTML;
    };

    reader.readAsBinaryString(file);
  } else {
    document.getElementById("result-container").innerHTML =
      "<p>Please choose a file to calculate its size.</p>";
  }
}

const resultContainer = document.getElementById("result-container");

function calculateTotalFileSize() {
  const fileInput = document.getElementById("file-input");

  const files = fileInput.files;

  if (!files.length) {
    resultContainer.innerHTML =
      "<p>Please choose a file to calculate its size.</p>";
    return;
  }

  let totalSize = 0;
  let fileDetails = [];

  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const fileSize = file.size;
    totalSize += fileSize;

    // Convert file size to human-readable format
    const fileSizeFormatted = formatFileSize(fileSize);

    // Push file details to the array
    fileDetails.push({ name: file.name, size: fileSizeFormatted });
  }

  displayResult(totalSize, fileDetails);
}

function formatFileSize(bytes) {
  if (bytes === 0) return "0 Bytes";
  const k = 1024;
  const sizes = ["Bytes", "KB", "MB", "GB", "TB"];
  const i = Math.floor(Math.log(bytes) / Math.log(k));
  return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + " " + sizes[i];
}

function displayResult(totalSize, fileDetails) {
  resultContainer.innerHTML = `<p>Total size of selected files: ${formatFileSize(
    totalSize
  )}</p>`;

  fileDetails.forEach((file) => {
    resultContainer.innerHTML += `<p>${file.name} - ${file.size}</p>`;
  });
}
