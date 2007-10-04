<?php

/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                           |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id:$
*/

/**
 * @package    OpenadsDll
 * @author     Andriy Petlyovanyy <apetlyovanyy@lohika.com>
 *
 */

// Include base info class.
require_once MAX_PATH . '/lib/OA/Info.php';

/**
 *  Class with information about campaign
 *
 */

class OA_Dll_CampaignInfo extends OA_Info
{
    /**
     * The ID of the campaign.
     *
     * @var integer $campaignId
     */
	var $campaignId;

    /**
     * The ID of the advertiser to which to add the campaign.
     *
     * @var integer $advertiserId
     */
	var $advertiserId;

    /**
     * The name of the campaign.
     *
     * @var string $campaignName
     */
	var $campaignName;

    /**
     * The date the campaign should start.
     *
     * @var date $startDate
     */
	var $startDate;

    /**
     * The date the campaign should end.
     *
     * @var date $endDate
     */
	var $endDate;

    /**
     * The number of impressions from which to book this campaign.
     *
     * @var integer $impressions
     */
    var $impressions;

    /**
     * The number of clicks from which to book this campaign.
     *
     * @var integer $clicks
     */
    var $clicks;

    /**
     * The priority of this campaign.
     *
     * @var integer $priority
     */
    var $priority;

    /**
     * The priority of this campaign.
     *
     * @var integer $weight
     */
    var $weight;

	/**
	 * Setting all default values. Used in adding new campaign.
	 *
	 * @access public
	 *
	 */
	function setDefaultForAdd() {
	    if (is_null($this->startDate)) {
	        $this->startDate = new Date(OA_Dal::noDateValue());
	    }

	    if (is_null($this->endDate)) {
	        $this->endDate = new Date(OA_Dal::noDateValue());
	    }

	    if (is_null($this->impressions)) {
	        $this->impressions = -1;
	    }

	    if (is_null($this->clicks)) {
	        $this->clicks = -1;
	    }

	    if (is_null($this->priority)) {
	        $this->priority = 0;
	    }

	    if (is_null($this->weight)) {
	        $this->weight = 1;
	    }
	}

	/**
	 * This method returns array of fields with their corresponding types.
	 *
	 * @access public
	 *
	 * @return array
	 */
    function getFieldsTypes()
    {
        return array(
                    'campaignId' => 'integer',
                    'advertiserId' => 'integer',
                    'campaignName' => 'string',
                    'startDate' => 'date',
                    'endDate' => 'date',
                    'impressions' => 'integer',
                    'clicks' => 'integer',
                    'priority' => 'integer',
                    'weight' => 'integer'
                );
    }
}

?>