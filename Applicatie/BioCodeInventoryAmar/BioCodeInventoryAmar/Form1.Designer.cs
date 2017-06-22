namespace BioCodeInventoryAmar
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.txbUsernameAmar = new System.Windows.Forms.TextBox();
            this.txbPasswordAmar = new System.Windows.Forms.TextBox();
            this.btnLoginAmar = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // txbUsernameAmar
            // 
            this.txbUsernameAmar.Location = new System.Drawing.Point(60, 43);
            this.txbUsernameAmar.Name = "txbUsernameAmar";
            this.txbUsernameAmar.Size = new System.Drawing.Size(131, 20);
            this.txbUsernameAmar.TabIndex = 0;
            // 
            // txbPasswordAmar
            // 
            this.txbPasswordAmar.Location = new System.Drawing.Point(60, 106);
            this.txbPasswordAmar.Name = "txbPasswordAmar";
            this.txbPasswordAmar.Size = new System.Drawing.Size(131, 20);
            this.txbPasswordAmar.TabIndex = 1;
            this.txbPasswordAmar.UseSystemPasswordChar = true;
            // 
            // btnLoginAmar
            // 
            this.btnLoginAmar.Location = new System.Drawing.Point(85, 163);
            this.btnLoginAmar.Name = "btnLoginAmar";
            this.btnLoginAmar.Size = new System.Drawing.Size(82, 23);
            this.btnLoginAmar.TabIndex = 2;
            this.btnLoginAmar.Text = "Login";
            this.btnLoginAmar.UseVisualStyleBackColor = true;
            this.btnLoginAmar.Click += new System.EventHandler(this.btnLoginAmar_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(57, 27);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(55, 13);
            this.label1.TabIndex = 3;
            this.label1.Text = "Username";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(57, 90);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(53, 13);
            this.label2.TabIndex = 4;
            this.label2.Text = "Password";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(253, 231);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnLoginAmar);
            this.Controls.Add(this.txbPasswordAmar);
            this.Controls.Add(this.txbUsernameAmar);
            this.Cursor = System.Windows.Forms.Cursors.Default;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "Form1";
            this.Text = "Login";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.TextBox txbUsernameAmar;
        private System.Windows.Forms.TextBox txbPasswordAmar;
        private System.Windows.Forms.Button btnLoginAmar;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
    }
}

