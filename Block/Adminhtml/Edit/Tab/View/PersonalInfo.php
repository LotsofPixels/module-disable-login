<?php declare(strict_types = 1);

namespace Lotsofpixels\DisableAccount\Block\Adminhtml\Edit\Tab\View;

use Magento\Customer\Block\Adminhtml\Edit\Tab\View\PersonalInfo as MagentoPersonalInfo;
use Magento\Framework\Phrase;

class PersonalInfo extends MagentoPersonalInfo
{
    /**
     * @return Phrase
     */
    public function getAccountDisabled(): Phrase
    {
        $accountDisabled = 'No';

        if ($this->getCustomer()->getCustomAttribute('is_disabled')->getValue() === '1') {
            $accountDisabled = 'Yes';
        }

        return __($accountDisabled);
    }
}
