<template>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"
          ><i class="fas fa-bars"></i
        ></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <div @click="logout">
        <button type="button" class="btn btn-light">Logout</button>
      </div>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Dev PH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- PROFILE HERE -->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <router-link :to="{ name: 'dashboard' }" class="nav-link">
              <p>Dashboard</p>
            </router-link>
          </li>

          <!--  <li class="nav-item">
                    </li> -->
          <li class="nav-item has-treeview">
            <ul class="nav nav-treeview"></ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <p>
                Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <router-link :to="{ name: 'user.index' }" class="nav-link">
                  <p>User</p>
                </router-link>
              </li>
              <li class="nav-item has-treeview">
                <router-link :to="{ name: 'role.index' }" class="nav-link">
                  <p>Roles</p>
                </router-link>
              </li>
              <li class="nav-item has-treeview">
                <router-link :to="{ name: 'permission.index' }" class="nav-link">
                  <p>Permission</p>
                </router-link>
              </li>

            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>
<script>
import loginStore from "../stores/loginStore";
import { useRouter } from "vue-router";
export default {
  setup() {
    const router = useRouter();
    const logout = () => {
      loginStore.logoutUser().then((result) => {
        if (result) {
          localStorage.removeItem("user");
          router.push({ name: "home" });
        }
      });
    };
    return { logout };
  },
};
</script>
