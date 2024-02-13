<?php

namespace App\Models;

use Fpaipl\Brandy\Models\Party;
use Fpaipl\Authy\Models\User as AuthyUser;

class User extends AuthyUser {

    public function party()
    {
        return $this->hasOne(Party::class);
    }

    public function getMyType()
    {
        switch ($this->type) {
            case 'user-brand': return 'product-brand';
            case 'user-vendor': return 'product-vendor';
            case 'user-factory': return 'product-factory';
            default: break;
        }
    }

   // Brand Team

   public function isOwnerBrand()
   {
       return $this->hasRole('owner-brand');
   }

   public function isManagerBrand()
   {
       return $this->hasRole('manager-brand');
   }

   public function isOrderManagerBrand()
   {
       return $this->hasRole('order-manager-brand');
   }

   public function isAccountManagerBrand()
   {
       return $this->hasRole('account-manager-brand');
   }

   public function isStoreManagerBrand()
   {
       return $this->hasRole('store-manager-brand');
   }

   // Vendor Team

   public function isOwnerVendor()
   {
       return $this->hasRole('owner-vendor');
   }

   public function isManagerVendor()
   {
       return $this->hasRole('manager-vendor');
   }

   public function isOrderManagerVendor()
   {
       return $this->hasRole('order-manager-vendor');
   }

   public function isAccountManagerVendor()
   {
       return $this->hasRole('account-manager-vendor');
   }

   public function isStoreManagerVendor()
   {
       return $this->hasRole('store-manager-vendor');
   }


   // Factory Team

   public function isOwnerFactory()
   {
       return $this->hasRole('owner-factory');
   }

   public function isManagerFactory()
   {
       return $this->hasRole('manager-factory');
   }

   public function isOrderManagerFactory()
   {
       return $this->hasRole('order-manager-factory');
   }

   public function isAccountManagerFactory()
   {
       return $this->hasRole('account-manager-factory');
   }

   public function isStoreManagerFactory()
   {
       return $this->hasRole('store-manager-factory');
   }


   // Senior Team

   public function ofOwnerClass()
   {
       return $this->isOwnerBrand() || $this->isOwnerVendor() || $this->isOwnerFactory();
   }

   public function ofManagerClass()
   {
       return $this->isManagerBrand() || $this->isManagerVendor() || $this->isManagerFactory();
   }


   // Staff Team

   public function ofOrderManagerClass()
   {
       return $this->isOrderManagerBrand() || $this->isOrderManagerVendor() || $this->isOrderManagerFactory();
   }

   public function ofAccountManagerClass()
   {
       return $this->isAccountManagerBrand() || $this->isAccountManagerVendor() || $this->isAccountManagerFactory();
   }

   public function ofStoreManagerClass()
   {
       return $this->isStoreManagerBrand() || $this->isStoreManagerVendor() || $this->isStoreManagerFactory();
   }

   // For Chat Resource

    public function isBrand()
    {
         return $this->isOwnerBrand() || $this->isManagerBrand() || $this->isOrderManagerBrand() || $this->isAccountManagerBrand() || $this->isStoreManagerBrand();
    }

    public function isVendor()
    {
         return $this->isOwnerVendor() || $this->isManagerVendor() || $this->isOrderManagerVendor() || $this->isAccountManagerVendor() || $this->isStoreManagerVendor();
    }

    public function isFactory()
    {
         return $this->isOwnerFactory() || $this->isManagerFactory() || $this->isOrderManagerFactory() || $this->isAccountManagerFactory() || $this->isStoreManagerFactory();
    }

    // 

    public function isParty()
    {
        return $this->party()->exists();
    }


    public function hasParty()
    {
        return $this->party()->exists();
    }

}
