<?php
require_once '../vendor/autoload.php';

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=arnoldazurestorage;AccountKey=p7jn2gjtxiB0iYbf0kFHyrq357qUnr3wwsrFLkl7pgWI6vYms3fOQnnuplGWHnKkVczoPl6FUqgMw3JjTfjGuA==;EndpointSuffix=core.windows.net";
$containerName = "arnoldblobs";
$blobClient = BlobRestProxy::createBlobService($connectionString);
$listBlobsOptions = new ListBlobsOptions();
$listBlobsOptions->setPrefix("");
$result = $blobClient->listBlobs($containerName, $listBlobsOptions);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Buku</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Blob
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <a href="index.php?page=pformbuku" class="btn btn-primary"><i class="fa fa-plus-square"></i> Tambah Data</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>URL</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    do{
                                        foreach ($result->getBlobs() as $blob){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td class="center"><?php echo $blob->getName() ?></td>
                                        <td class="center"><?php echo $blob->getUrl() ?></td>
                                        <td class="center"><img width="80" height="100" src="<?php echo $blob->getUrl() ?>"/></td>
                                        <td class="center"><a href="?page=panalyze&url=<?php echo $blob->getUrl() ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Analyze</a></td>
                                    </tr>
                                    <?php
                                        }
                                        $listBlobsOptions->setContinuationToken($result->getContinuationToken());
                                       }
                                       while ($result->getContinuationToken());
                                    ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->