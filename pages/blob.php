<?php
require_once '../vendor/autoload.php';

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=arnoldazurestorage;AccountKey=p7jn2gjtxiB0iYbf0kFHyrq357qUnr3wwsrFLkl7pgWI6vYms3fOQnnuplGWHnKkVczoPl6FUqgMw3JjTfjGuA==;EndpointSuffix=core.windows.net";

	$fileToUpload = $_FILES["fileToUpload"]["name"];
	$content = fopen($_FILES["fileToUpload"]["tmp_name"], "r");
    //echo fread($content, filesize($fileToUpload));
    $containerName = "arnoldblobs";
    $blobClient = BlobRestProxy::createBlobService($connectionString);

	$blobClient->createBlockBlob($containerName, $fileToUpload, $content);

	header("Location: index.php?page=pbuku");

// $listBlobsOptions = new ListBlobsOptions();
// $listBlobsOptions->setPrefix("");
// $result = $blobClient->listBlobs($containerName, $listBlobsOptions);
?>
