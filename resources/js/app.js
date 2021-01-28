import feather from 'feather-icons';

window.data = {
  isSideMenuOpen: false,
  toggleSideMenu() {
    this.isSideMenuOpen = !this.isSideMenuOpen
  },
  closeSideMenu() {
    this.isSideMenuOpen = false
  },
  isNotificationsMenuOpen: false,
  toggleNotificationsMenu() {
    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
  },
  closeNotificationsMenu() {
    this.isNotificationsMenuOpen = false
  },
  isProfileMenuOpen: false,
  toggleProfileMenu() {
    this.isProfileMenuOpen = !this.isProfileMenuOpen
  },
  closeProfileMenu() {
    this.isProfileMenuOpen = false
  },
  sideDropdown: null,
  toggleSideDropdown(name) {
    if (this.sideDropdown === name) {
      this.sideDropdown = null
    } else {
      this.sideDropdown = name
    }
  },
  isModalOpen: false,
  trapCleanup: null,
  openModal() {
    this.isModalOpen = true
    this.trapCleanup = focusTrap(document.querySelector('#modal'))
  },
  closeModal() {
    this.isModalOpen = false
    this.trapCleanup()
  }
}

const initIcon = () => {
  feather.replace();
}

initIcon();