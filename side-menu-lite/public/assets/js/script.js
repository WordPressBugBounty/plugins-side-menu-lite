/**
 * SideMenuLite
 * A JavaScript class for creating customizable side menus.
 *
 * @version 1.0.0
 * @license MIT License
 * @author Dmytro Lobov
 * @url https://wow-estore.com/item/side-menu-pro/
 */

'use strict';

class SideMenuLite {
  constructor(options) {
    const defaultOptions = {
      showAfterTimer: false,
      hideAfterTimer: false,
      showAfterPosition: false,
      hideAfterPosition: false,
      touch: false,
      mobile: false,
      mobileStyle: {},
      mobileHide: false,
      desktopHide: false,
      style: {},
      items: {},
      scrollSpyOffset: 50,
    };

    this.settings = {...defaultOptions, ...options};
    this.element = document.getElementById(this.settings.element);
  }

  touchThis() {
    if (this.settings.touch) {
      return;
    }

    document.querySelector('#'+this.settings.element).addEventListener('touchstart', function() {
      this.classList.add('sm-open');
    });

    const links = Array.from(this.element.querySelectorAll('.sm-link'));
    links.forEach((link) => {
      link.addEventListener('touchend', this.toggleItemOpen.bind(this, link));
    });
  }

  toggleItemOpen(link, event) {
    const item = link.closest('.sm-item');
    const {classList} = item;

    if (!classList.contains('sm-open')) {
      event.preventDefault();
      classList.add('sm-open');
      this.touchAnyWhere(link, classList);
    }
  }

  touchAnyWhere(link, classList) {
    document.addEventListener('touchstart', function (event) {
      if (!link.contains(event.target)) {
        classList.remove('sm-open')
      }
    });
  }

  displayMenu() {
    if (!this.settings.showAfterTimer && !this.settings.showAfterPosition) {
      this.showMenu();
    }

    this.settings.showAfterTimer && this.showAfterTimer(this.settings.showAfterTimer);
    this.settings.hideAfterTimer && this.hideAfterTimer(this.settings.hideAfterTimer);
    this.settings.hideAfterPosition && this.hideAfterPosition(this.settings.hideAfterPosition);
    this.settings.showAfterPosition && this.showAfterPosition(this.settings.showAfterPosition);
  }

  showMenu() {
    this.element.classList.remove('is-hidden');
    this.subMenuWidth();
  }

  hideMenu() {
    this.element.classList.add('is-hidden');
  }

  showAfterTimer() {
    setTimeout(() => this.showMenu(), this.settings.showAfterTimer * 1000);
  }

  hideAfterTimer() {
    setTimeout(() => this.element.classList.add('is-hidden'), this.settings.hideAfterTimer * 1000);
  }

  showAfterPosition() {
    window.addEventListener('scroll', () => {
      const shouldHide = window.scrollY <= this.settings.showAfterPosition;
      if(!shouldHide) {
        this.showMenu();
      } else {
        this.hideMenu();
      }
    });
  }

  hideAfterPosition() {
    window.addEventListener('scroll', () => {
      const shouldHide = window.scrollY > this.settings.hideAfterPosition;
      if(!shouldHide) {
        this.showMenu();
      } else {
        this.hideMenu();
      }
    });
  }

  actionServices() {
    this.element.addEventListener('click', (event) => {
      const target = event.target.closest('[data-btn-action]');
      if (!target) return;

      event.preventDefault();
      const action = target.getAttribute('data-btn-action');
      this.handleAction(action, target);
    });
  }

  handleAction(action, link) {
    const actionMap = {
      print: () => window.print(),
      goback: () => window.history.back(),
      goforward: () => window.history.forward(),
      scroll: () => {
        const anchor = link.getAttribute('href');
        const element = document.querySelector(anchor);
        element.scrollIntoView({behavior: 'smooth', block: 'start', inline: 'nearest'});
      },
      totop: () => window.scrollTo({top: 0, behavior: 'smooth'}),
      tobottom: () => window.scrollTo({top: document.body.scrollHeight, behavior: 'smooth'}),
    };

    const actionFunction = actionMap[action];
    if (actionFunction) {
      actionFunction();
    }
  }

  toggleMenu() {
    const elements = this.element.querySelectorAll('[data-smmenu-target]');
    if(!elements) {
      return false;
    }

    if(this.element.classList.contains('sm-connected')) {
      elements.forEach(element => {

        element.addEventListener('click', () => {
          const toogle = element.getAttribute('data-smmenu-target');
          if(toogle === 'close') {
            this.element.classList.remove('sm-open');
          }
        });

        element.addEventListener('touchend', () => {
          const toogle = element.getAttribute('data-smmenu-target');
          if(toogle === 'close') {
            this.element.classList.remove('sm-open');
          }
        });

      });
    }
  }

  run() {
    this.style();
    this.itemStyle();
    this.touchThis();
    this.displayMenu();
    this.actionServices();
    this.scrollSpy();
    this.toggleMenu();
  }

  scrollSpy() {

    const navbarLinks = [...this.element.querySelectorAll('.sm-link[data-btn-action="scrollSpy"]')];
    if (navbarLinks.length < 1) {
      return false;
    }

    const sections = navbarLinks.map(link => document.querySelector(link.getAttribute('href')));

    navbarLinks.forEach(link => {
      link.addEventListener('click', () => {
        const parent = link.closest('.sm-item');
        const anchor = link.getAttribute('href');
        const element = document.querySelector(anchor);
        if(!element) {
          return;
        }
        element.scrollIntoView({behavior: 'smooth', block: 'start', inline: 'nearest'});

        navbarLinks.forEach(navLink => {
          const parent = link.closest('.sm-item');
          parent.classList.remove('sm-open');
        });
        parent.classList.add('sm-open');
      });
    });

    window.addEventListener('scroll', () => {
      const currentScroll = window.pageYOffset;

      sections.forEach(section => {
        if(section === null) {
          return;
        }
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;

        if (currentScroll >= sectionTop - this.settings.scrollSpyOffset  && currentScroll < sectionTop + sectionHeight) {
          const sectionId = section.getAttribute('id');
          setActiveLink(sectionId);
        }
      });
    });

    function setActiveLink(sectionId) {
      navbarLinks.forEach(link => {
        const parent = link.closest('.sm-item');
        if (link.getAttribute('href') === `#${sectionId}`) {
          parent.classList.add('sm-open');
        } else {
          parent.classList.remove('sm-open');
        }
      });
    }
  }



  style() {
    const styles = this.settings.style;
    const styleEntries = Object.entries(styles);
    const style = styleEntries
    .map(([property, value]) => `${property}: ${value};`)
    .join('');

    let mobileStyle = '';
    if(this.settings.mobile) {
      const styles = this.settings.mobileStyle;
      const styleEntries = Object.entries(styles);
      const style = styleEntries
      .map(([property, value]) => `${property}: ${value};`)
      .join('');

      mobileStyle = `@media only screen and (max-width: ${this.settings.mobile}px){ #${this.settings.element} {${style}}}`;
    }

    let mobileHide = '';
    if(this.settings.mobileHide) {
      mobileHide = `@media only screen and (max-width: ${this.settings.mobileHide}px){#${this.settings.element} {display:none;}}`;
    }

    let desktopHide = '';
    if(this.settings.desktopHide) {
      desktopHide = `@media only screen and (min-width: ${this.settings.desktopHide}px){#${this.settings.element} {display:none;}}`;
    }

    const targetStyleElement = document.getElementById('side-menu-css');

    const styleElement = document.createElement('style');
    styleElement.setAttribute('id', 'side-menu-js-css');
    styleElement.innerHTML = `#${this.settings.element} {${style}} ${mobileStyle} ${mobileHide} ${desktopHide}`;

    if(targetStyleElement) {
      targetStyleElement.parentNode.insertBefore(styleElement, targetStyleElement.nextSibling);
    } else {
      document.body.appendChild(styleElement);
    }



  }

  itemStyle() {
    const itemsObj = this.settings.items;
    const items = Array.from(this.element.querySelectorAll('.sm-item'));

    Object.entries(itemsObj).forEach(([key, value]) => {
      for (const property in value) {
        if (value.hasOwnProperty(property)) {
          items[key].style.setProperty(property, value[property]);
        }
      }
    });
  }

  subMenuWidth() {
    const items = this.element.querySelectorAll('.sm-has-submenu');
    items.forEach((item) => {
      const itemWidth = item.clientWidth;
      const submenu = item.querySelector('.sm-sub-menu');
      const width = submenu.clientWidth;
      if (itemWidth < width) {
        const link = item.querySelector('.sm-link');
        link.style.width = `${width}px`;
      } else {
        const links = submenu.querySelectorAll('.sm-link');
        links.forEach((link) => {
          link.style.width = `${itemWidth}px`;
        });
      }
    });
  }

  static initialize(options) {
    const sideMenuPro = new SideMenuLite(options);
    sideMenuPro.run();
    return sideMenuPro;
  }
}

document.addEventListener('DOMContentLoaded', function() {
  for (let key in window) {
    if (key.indexOf('SideMenuLite_') >= 0) {
      const val = window[key];
      new SideMenuLite(val);
      SideMenuLite.initialize(val);
    }
  }
});
