import toastr from "toastr";

window.data = {
  menuActive: null,
  pushStateUrl(component) {
    let url = component.replace(".", "/").replace("index", '');
    history.pushState(null, null, location.href);
    history.replaceState(null, null, '/' + url);
    this.menuActive = component;
  },
  removeStateUrl() {
    history.pushState(null, null, '');
  },
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
  idDeleteData: null,
  deleteData(id, modalName = null) {
    this.idDeleteData = id;

    if (modalName !== null) {
      this.isModalOpen = modalName;
    }
  },
  isModalOpen: null,
  openModal(name) {
    this.isModalOpen = name;
  },
  closeModal() {
    this.isModalOpen = null
  },
  consoleLog(data) {
    console.log(data);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  history.pushState(null, null, '');

  Livewire.on('successAction', (message, component) => {
    toastr.success(message)
    window.data.pushStateUrl(component);
  });
});