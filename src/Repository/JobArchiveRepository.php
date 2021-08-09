<?php

declare(strict_types=1);

/*
 * This file is part of the Dreibein job posting bundle.
 *
 * @copyright  Copyright (c) 2021, Digitalagentur Dreibein GmbH
 * @author     Digitalagentur Dreibein GmbH <https://www.agentur-dreibein.de>
 * @link       https://github.com/dreibein/contao-jobposting-bundle
 */

namespace Dreibein\JobpostingBundle\Repository;

use Contao\Model;
use Dreibein\JobpostingBundle\Model\JobArchiveModel;

class JobArchiveRepository extends Model
{
    protected static $strTable = 'tl_job_archive';

    /**
     * Find a specific archive by its ID.
     *
     * @param int $id
     *
     * @return JobArchiveModel|null
     */
    public static function findById(int $id): ?JobArchiveModel
    {
        return self::findByPk($id);
    }

    /**
     * @param array $arrOptions
     *
     * @return JobArchiveModel[]|Model\Collection|null
     */
    public static function findAll(array $arrOptions = []): ?Model\Collection
    {
        return parent::findAll($arrOptions);
    }
}